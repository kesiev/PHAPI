var PHAPI={
	_reserved:["empty","clone"],
	_handlers:[
		{
			mode:"jQuery",
			check:function(){return window.$},
			constructor:function(name) { return $(document.createElement(name))},
			append:function(node,obj) { $(node).append(obj)},
			finalize:function(node) { if (window.$&&$.mobile) $.mobile.changePage($(node)); }
		},
		{
			mode:"DOM",
			check:function(){return true},
			constructor:function(name) { return document.createElement(name)},
			append:function(node,obj) { node.appendChild(obj)},
			finalize:function(node) { }
		}
	],
	getHandler:function(){
		for (var i=0;i<this._handlers.length;i++)
			if (this._handlers[i].check()) return this._handlers[i];
	},
	call:function(url,parent){		
		var self=this;	
		var client = new XMLHttpRequest();
		client.onreadystatechange = function() {
		  if((this.readyState == this.DONE) && (this.status == 200) && (this.responseText != null))
		    self.render(JSON.parse(this.responseText),parent);
		}
		client.open("GET", url);
		client.send();
	},
	render:function(inp,parent) {
		var set={},handler=this.getHandler(),n,main;
		for (var i=0;i<inp.obj.length;i++) {
			if (inp.obj[i]._type=="function") n=eval("(function(){"+inp.obj[i].code+"})"); else
			n=handler.constructor(inp.obj[i]._type);
			for (var a in inp.obj[i]) if (a[0]!="_") n[a]=inp.obj[i][a];
			set[inp.obj[i]._id]=n;
			if (inp.obj[i]._main) main=n;
		}
		for (var i=0;i<inp.call.length;i++) {
			n=set[inp.call[i][0]];
			for (var j=0;j<inp.call[i][2].length;j++)
				if ((typeof inp.call[i][2][j] == "object")&&(inp.call[i][2][j]._)) inp.call[i][2][j]=set[inp.call[i][2][j]._];
			n[inp.call[i][1]].apply(n,inp.call[i][2]);
		}
		if (main) handler.append(parent,main);
		handler.finalize(main);
	},
	makeApi:function(tags){
		var loc,met,done,la,tag,name,handler=this.getHandler();
		var out="$__obj=Array('obj'=>Array(),'call'=>Array());\n\n";
		out+="class PHFunction{\n\tpublic $_id;\n\tpublic $_type='function';\n\tpublic $_code;\n\tfunction __construct($code) {  global $__obj; $this->_code=$code; array_push($__obj['obj'],$this); $this->_id=uniqid(); }\n\tfunction _serialize(){ return Array('_id'=>$this->_id,'_type'=>'function','code'=>$this->_code); }\n}\n\n";
		for (var i=0;i<tags.length;i++) {
			done={};
			out+="class PH"+tags[i].charAt(0).toUpperCase() + tags[i].slice(1)+"{\n";
			loc="\tprivate $_main=false;\n\tpublic $_id;\n\tprivate $_type='"+tags[i]+"';\n";
			met="\tpublic function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }\n";
			met+="\tprivate function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }\n";
			met+="\tfunction _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }\n";
			met+="\tfunction done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }\n";
			tag=handler.constructor(tags[i]);
			for (var a in tag) {
				name=(this._reserved.indexOf(a)==-1?"":"ph")+a
				la=a.toLowerCase();
				if (!done[la])
					switch (typeof tag[a]) {
						case "string": {
							loc+="\tpublic $"+name+";\n"
							break;
						}
						case "function":{
							met+="\tfunction "+name+"(){ $this->_call('"+a+"',func_get_args()); return $this; }\n";
							break;
						}
					}
				done[la]=1;
			}
			out+=loc+met+"}\n\n";
		}
		var ta=document.createElement("textarea");
		ta.style.width=ta.style.height="400px";
		ta.value="<?php\n\n// Mapping mode: "+handler.mode+"\n\n"+out+"?>";
		document.body.appendChild(ta);
		if (window.console) console.log(ta.value);
	}
}
