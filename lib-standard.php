<?php

// Mapping mode: DOM

$__obj=Array('obj'=>Array(),'call'=>Array());

class PHFunction{
	public $_id;
	public $_type='function';
	public $_code;
	function __construct($code) {  global $__obj; $this->_code=$code; array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	function _serialize(){ return Array('_id'=>$this->_id,'_type'=>'function','code'=>$this->_code); }
}

class PHDiv{
	private $_main=false;
	public $_id;
	private $_type='div';
	public $align;
	public $contentEditable;
	public $outerText;
	public $outerHTML;
	public $innerText;
	public $innerHTML;
	public $accessKey;
	public $webkitdropzone;
	public $dir;
	public $lang;
	public $title;
	public $id;
	public $webkitPseudo;
	public $className;
	public $tagName;
	public $textContent;
	public $baseURI;
	public $localName;
	public $namespaceURI;
	public $nodeName;
	public function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	private function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }
	function _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }
	function done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }
	function insertAdjacentHTML(){ $this->_call('insertAdjacentHTML',func_get_args()); return $this; }
	function insertAdjacentText(){ $this->_call('insertAdjacentText',func_get_args()); return $this; }
	function click(){ $this->_call('click',func_get_args()); return $this; }
	function insertAdjacentElement(){ $this->_call('insertAdjacentElement',func_get_args()); return $this; }
	function getAttribute(){ $this->_call('getAttribute',func_get_args()); return $this; }
	function setAttribute(){ $this->_call('setAttribute',func_get_args()); return $this; }
	function removeAttribute(){ $this->_call('removeAttribute',func_get_args()); return $this; }
	function getAttributeNode(){ $this->_call('getAttributeNode',func_get_args()); return $this; }
	function getElementsByTagName(){ $this->_call('getElementsByTagName',func_get_args()); return $this; }
	function getAttributeNS(){ $this->_call('getAttributeNS',func_get_args()); return $this; }
	function setAttributeNS(){ $this->_call('setAttributeNS',func_get_args()); return $this; }
	function removeAttributeNS(){ $this->_call('removeAttributeNS',func_get_args()); return $this; }
	function getElementsByTagNameNS(){ $this->_call('getElementsByTagNameNS',func_get_args()); return $this; }
	function getAttributeNodeNS(){ $this->_call('getAttributeNodeNS',func_get_args()); return $this; }
	function hasAttribute(){ $this->_call('hasAttribute',func_get_args()); return $this; }
	function hasAttributeNS(){ $this->_call('hasAttributeNS',func_get_args()); return $this; }
	function focus(){ $this->_call('focus',func_get_args()); return $this; }
	function blur(){ $this->_call('blur',func_get_args()); return $this; }
	function scrollIntoView(){ $this->_call('scrollIntoView',func_get_args()); return $this; }
	function scrollIntoViewIfNeeded(){ $this->_call('scrollIntoViewIfNeeded',func_get_args()); return $this; }
	function scrollByLines(){ $this->_call('scrollByLines',func_get_args()); return $this; }
	function scrollByPages(){ $this->_call('scrollByPages',func_get_args()); return $this; }
	function getElementsByClassName(){ $this->_call('getElementsByClassName',func_get_args()); return $this; }
	function querySelector(){ $this->_call('querySelector',func_get_args()); return $this; }
	function querySelectorAll(){ $this->_call('querySelectorAll',func_get_args()); return $this; }
	function webkitMatchesSelector(){ $this->_call('webkitMatchesSelector',func_get_args()); return $this; }
	function remove(){ $this->_call('remove',func_get_args()); return $this; }
	function getClientRects(){ $this->_call('getClientRects',func_get_args()); return $this; }
	function getBoundingClientRect(){ $this->_call('getBoundingClientRect',func_get_args()); return $this; }
	function webkitRequestPointerLock(){ $this->_call('webkitRequestPointerLock',func_get_args()); return $this; }
	function setAttributeNode(){ $this->_call('setAttributeNode',func_get_args()); return $this; }
	function removeAttributeNode(){ $this->_call('removeAttributeNode',func_get_args()); return $this; }
	function setAttributeNodeNS(){ $this->_call('setAttributeNodeNS',func_get_args()); return $this; }
	function webkitCreateShadowRoot(){ $this->_call('webkitCreateShadowRoot',func_get_args()); return $this; }
	function webkitRequestFullScreen(){ $this->_call('webkitRequestFullScreen',func_get_args()); return $this; }
	function insertBefore(){ $this->_call('insertBefore',func_get_args()); return $this; }
	function replaceChild(){ $this->_call('replaceChild',func_get_args()); return $this; }
	function removeChild(){ $this->_call('removeChild',func_get_args()); return $this; }
	function appendChild(){ $this->_call('appendChild',func_get_args()); return $this; }
	function hasChildNodes(){ $this->_call('hasChildNodes',func_get_args()); return $this; }
	function cloneNode(){ $this->_call('cloneNode',func_get_args()); return $this; }
	function normalize(){ $this->_call('normalize',func_get_args()); return $this; }
	function isSupported(){ $this->_call('isSupported',func_get_args()); return $this; }
	function hasAttributes(){ $this->_call('hasAttributes',func_get_args()); return $this; }
	function lookupPrefix(){ $this->_call('lookupPrefix',func_get_args()); return $this; }
	function isDefaultNamespace(){ $this->_call('isDefaultNamespace',func_get_args()); return $this; }
	function lookupNamespaceURI(){ $this->_call('lookupNamespaceURI',func_get_args()); return $this; }
	function addEventListener(){ $this->_call('addEventListener',func_get_args()); return $this; }
	function removeEventListener(){ $this->_call('removeEventListener',func_get_args()); return $this; }
	function isSameNode(){ $this->_call('isSameNode',func_get_args()); return $this; }
	function isEqualNode(){ $this->_call('isEqualNode',func_get_args()); return $this; }
	function compareDocumentPosition(){ $this->_call('compareDocumentPosition',func_get_args()); return $this; }
	function contains(){ $this->_call('contains',func_get_args()); return $this; }
	function dispatchEvent(){ $this->_call('dispatchEvent',func_get_args()); return $this; }
}

class PHTable{
	private $_main=false;
	public $_id;
	private $_type='table';
	public $width;
	public $summary;
	public $rules;
	public $frame;
	public $cellSpacing;
	public $cellPadding;
	public $border;
	public $bgColor;
	public $align;
	public $contentEditable;
	public $outerText;
	public $outerHTML;
	public $innerText;
	public $innerHTML;
	public $accessKey;
	public $webkitdropzone;
	public $dir;
	public $lang;
	public $title;
	public $id;
	public $webkitPseudo;
	public $className;
	public $tagName;
	public $textContent;
	public $baseURI;
	public $localName;
	public $namespaceURI;
	public $nodeName;
	public function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	private function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }
	function _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }
	function done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }
	function createTHead(){ $this->_call('createTHead',func_get_args()); return $this; }
	function deleteTHead(){ $this->_call('deleteTHead',func_get_args()); return $this; }
	function createTFoot(){ $this->_call('createTFoot',func_get_args()); return $this; }
	function deleteTFoot(){ $this->_call('deleteTFoot',func_get_args()); return $this; }
	function createTBody(){ $this->_call('createTBody',func_get_args()); return $this; }
	function createCaption(){ $this->_call('createCaption',func_get_args()); return $this; }
	function deleteCaption(){ $this->_call('deleteCaption',func_get_args()); return $this; }
	function insertRow(){ $this->_call('insertRow',func_get_args()); return $this; }
	function deleteRow(){ $this->_call('deleteRow',func_get_args()); return $this; }
	function insertAdjacentHTML(){ $this->_call('insertAdjacentHTML',func_get_args()); return $this; }
	function insertAdjacentText(){ $this->_call('insertAdjacentText',func_get_args()); return $this; }
	function click(){ $this->_call('click',func_get_args()); return $this; }
	function insertAdjacentElement(){ $this->_call('insertAdjacentElement',func_get_args()); return $this; }
	function getAttribute(){ $this->_call('getAttribute',func_get_args()); return $this; }
	function setAttribute(){ $this->_call('setAttribute',func_get_args()); return $this; }
	function removeAttribute(){ $this->_call('removeAttribute',func_get_args()); return $this; }
	function getAttributeNode(){ $this->_call('getAttributeNode',func_get_args()); return $this; }
	function getElementsByTagName(){ $this->_call('getElementsByTagName',func_get_args()); return $this; }
	function getAttributeNS(){ $this->_call('getAttributeNS',func_get_args()); return $this; }
	function setAttributeNS(){ $this->_call('setAttributeNS',func_get_args()); return $this; }
	function removeAttributeNS(){ $this->_call('removeAttributeNS',func_get_args()); return $this; }
	function getElementsByTagNameNS(){ $this->_call('getElementsByTagNameNS',func_get_args()); return $this; }
	function getAttributeNodeNS(){ $this->_call('getAttributeNodeNS',func_get_args()); return $this; }
	function hasAttribute(){ $this->_call('hasAttribute',func_get_args()); return $this; }
	function hasAttributeNS(){ $this->_call('hasAttributeNS',func_get_args()); return $this; }
	function focus(){ $this->_call('focus',func_get_args()); return $this; }
	function blur(){ $this->_call('blur',func_get_args()); return $this; }
	function scrollIntoView(){ $this->_call('scrollIntoView',func_get_args()); return $this; }
	function scrollIntoViewIfNeeded(){ $this->_call('scrollIntoViewIfNeeded',func_get_args()); return $this; }
	function scrollByLines(){ $this->_call('scrollByLines',func_get_args()); return $this; }
	function scrollByPages(){ $this->_call('scrollByPages',func_get_args()); return $this; }
	function getElementsByClassName(){ $this->_call('getElementsByClassName',func_get_args()); return $this; }
	function querySelector(){ $this->_call('querySelector',func_get_args()); return $this; }
	function querySelectorAll(){ $this->_call('querySelectorAll',func_get_args()); return $this; }
	function webkitMatchesSelector(){ $this->_call('webkitMatchesSelector',func_get_args()); return $this; }
	function remove(){ $this->_call('remove',func_get_args()); return $this; }
	function getClientRects(){ $this->_call('getClientRects',func_get_args()); return $this; }
	function getBoundingClientRect(){ $this->_call('getBoundingClientRect',func_get_args()); return $this; }
	function webkitRequestPointerLock(){ $this->_call('webkitRequestPointerLock',func_get_args()); return $this; }
	function setAttributeNode(){ $this->_call('setAttributeNode',func_get_args()); return $this; }
	function removeAttributeNode(){ $this->_call('removeAttributeNode',func_get_args()); return $this; }
	function setAttributeNodeNS(){ $this->_call('setAttributeNodeNS',func_get_args()); return $this; }
	function webkitCreateShadowRoot(){ $this->_call('webkitCreateShadowRoot',func_get_args()); return $this; }
	function webkitRequestFullScreen(){ $this->_call('webkitRequestFullScreen',func_get_args()); return $this; }
	function insertBefore(){ $this->_call('insertBefore',func_get_args()); return $this; }
	function replaceChild(){ $this->_call('replaceChild',func_get_args()); return $this; }
	function removeChild(){ $this->_call('removeChild',func_get_args()); return $this; }
	function appendChild(){ $this->_call('appendChild',func_get_args()); return $this; }
	function hasChildNodes(){ $this->_call('hasChildNodes',func_get_args()); return $this; }
	function cloneNode(){ $this->_call('cloneNode',func_get_args()); return $this; }
	function normalize(){ $this->_call('normalize',func_get_args()); return $this; }
	function isSupported(){ $this->_call('isSupported',func_get_args()); return $this; }
	function hasAttributes(){ $this->_call('hasAttributes',func_get_args()); return $this; }
	function lookupPrefix(){ $this->_call('lookupPrefix',func_get_args()); return $this; }
	function isDefaultNamespace(){ $this->_call('isDefaultNamespace',func_get_args()); return $this; }
	function lookupNamespaceURI(){ $this->_call('lookupNamespaceURI',func_get_args()); return $this; }
	function addEventListener(){ $this->_call('addEventListener',func_get_args()); return $this; }
	function removeEventListener(){ $this->_call('removeEventListener',func_get_args()); return $this; }
	function isSameNode(){ $this->_call('isSameNode',func_get_args()); return $this; }
	function isEqualNode(){ $this->_call('isEqualNode',func_get_args()); return $this; }
	function compareDocumentPosition(){ $this->_call('compareDocumentPosition',func_get_args()); return $this; }
	function contains(){ $this->_call('contains',func_get_args()); return $this; }
	function dispatchEvent(){ $this->_call('dispatchEvent',func_get_args()); return $this; }
}

class PHTr{
	private $_main=false;
	public $_id;
	private $_type='tr';
	public $vAlign;
	public $chOff;
	public $ch;
	public $bgColor;
	public $align;
	public $contentEditable;
	public $outerText;
	public $outerHTML;
	public $innerText;
	public $innerHTML;
	public $accessKey;
	public $webkitdropzone;
	public $dir;
	public $lang;
	public $title;
	public $id;
	public $webkitPseudo;
	public $className;
	public $tagName;
	public $textContent;
	public $baseURI;
	public $localName;
	public $namespaceURI;
	public $nodeName;
	public function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	private function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }
	function _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }
	function done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }
	function insertCell(){ $this->_call('insertCell',func_get_args()); return $this; }
	function deleteCell(){ $this->_call('deleteCell',func_get_args()); return $this; }
	function insertAdjacentHTML(){ $this->_call('insertAdjacentHTML',func_get_args()); return $this; }
	function insertAdjacentText(){ $this->_call('insertAdjacentText',func_get_args()); return $this; }
	function click(){ $this->_call('click',func_get_args()); return $this; }
	function insertAdjacentElement(){ $this->_call('insertAdjacentElement',func_get_args()); return $this; }
	function getAttribute(){ $this->_call('getAttribute',func_get_args()); return $this; }
	function setAttribute(){ $this->_call('setAttribute',func_get_args()); return $this; }
	function removeAttribute(){ $this->_call('removeAttribute',func_get_args()); return $this; }
	function getAttributeNode(){ $this->_call('getAttributeNode',func_get_args()); return $this; }
	function getElementsByTagName(){ $this->_call('getElementsByTagName',func_get_args()); return $this; }
	function getAttributeNS(){ $this->_call('getAttributeNS',func_get_args()); return $this; }
	function setAttributeNS(){ $this->_call('setAttributeNS',func_get_args()); return $this; }
	function removeAttributeNS(){ $this->_call('removeAttributeNS',func_get_args()); return $this; }
	function getElementsByTagNameNS(){ $this->_call('getElementsByTagNameNS',func_get_args()); return $this; }
	function getAttributeNodeNS(){ $this->_call('getAttributeNodeNS',func_get_args()); return $this; }
	function hasAttribute(){ $this->_call('hasAttribute',func_get_args()); return $this; }
	function hasAttributeNS(){ $this->_call('hasAttributeNS',func_get_args()); return $this; }
	function focus(){ $this->_call('focus',func_get_args()); return $this; }
	function blur(){ $this->_call('blur',func_get_args()); return $this; }
	function scrollIntoView(){ $this->_call('scrollIntoView',func_get_args()); return $this; }
	function scrollIntoViewIfNeeded(){ $this->_call('scrollIntoViewIfNeeded',func_get_args()); return $this; }
	function scrollByLines(){ $this->_call('scrollByLines',func_get_args()); return $this; }
	function scrollByPages(){ $this->_call('scrollByPages',func_get_args()); return $this; }
	function getElementsByClassName(){ $this->_call('getElementsByClassName',func_get_args()); return $this; }
	function querySelector(){ $this->_call('querySelector',func_get_args()); return $this; }
	function querySelectorAll(){ $this->_call('querySelectorAll',func_get_args()); return $this; }
	function webkitMatchesSelector(){ $this->_call('webkitMatchesSelector',func_get_args()); return $this; }
	function remove(){ $this->_call('remove',func_get_args()); return $this; }
	function getClientRects(){ $this->_call('getClientRects',func_get_args()); return $this; }
	function getBoundingClientRect(){ $this->_call('getBoundingClientRect',func_get_args()); return $this; }
	function webkitRequestPointerLock(){ $this->_call('webkitRequestPointerLock',func_get_args()); return $this; }
	function setAttributeNode(){ $this->_call('setAttributeNode',func_get_args()); return $this; }
	function removeAttributeNode(){ $this->_call('removeAttributeNode',func_get_args()); return $this; }
	function setAttributeNodeNS(){ $this->_call('setAttributeNodeNS',func_get_args()); return $this; }
	function webkitCreateShadowRoot(){ $this->_call('webkitCreateShadowRoot',func_get_args()); return $this; }
	function webkitRequestFullScreen(){ $this->_call('webkitRequestFullScreen',func_get_args()); return $this; }
	function insertBefore(){ $this->_call('insertBefore',func_get_args()); return $this; }
	function replaceChild(){ $this->_call('replaceChild',func_get_args()); return $this; }
	function removeChild(){ $this->_call('removeChild',func_get_args()); return $this; }
	function appendChild(){ $this->_call('appendChild',func_get_args()); return $this; }
	function hasChildNodes(){ $this->_call('hasChildNodes',func_get_args()); return $this; }
	function cloneNode(){ $this->_call('cloneNode',func_get_args()); return $this; }
	function normalize(){ $this->_call('normalize',func_get_args()); return $this; }
	function isSupported(){ $this->_call('isSupported',func_get_args()); return $this; }
	function hasAttributes(){ $this->_call('hasAttributes',func_get_args()); return $this; }
	function lookupPrefix(){ $this->_call('lookupPrefix',func_get_args()); return $this; }
	function isDefaultNamespace(){ $this->_call('isDefaultNamespace',func_get_args()); return $this; }
	function lookupNamespaceURI(){ $this->_call('lookupNamespaceURI',func_get_args()); return $this; }
	function addEventListener(){ $this->_call('addEventListener',func_get_args()); return $this; }
	function removeEventListener(){ $this->_call('removeEventListener',func_get_args()); return $this; }
	function isSameNode(){ $this->_call('isSameNode',func_get_args()); return $this; }
	function isEqualNode(){ $this->_call('isEqualNode',func_get_args()); return $this; }
	function compareDocumentPosition(){ $this->_call('compareDocumentPosition',func_get_args()); return $this; }
	function contains(){ $this->_call('contains',func_get_args()); return $this; }
	function dispatchEvent(){ $this->_call('dispatchEvent',func_get_args()); return $this; }
}

class PHTd{
	private $_main=false;
	public $_id;
	private $_type='td';
	public $width;
	public $vAlign;
	public $scope;
	public $height;
	public $headers;
	public $chOff;
	public $ch;
	public $bgColor;
	public $axis;
	public $align;
	public $abbr;
	public $contentEditable;
	public $outerText;
	public $outerHTML;
	public $innerText;
	public $innerHTML;
	public $accessKey;
	public $webkitdropzone;
	public $dir;
	public $lang;
	public $title;
	public $id;
	public $webkitPseudo;
	public $className;
	public $tagName;
	public $textContent;
	public $baseURI;
	public $localName;
	public $namespaceURI;
	public $nodeName;
	public function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	private function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }
	function _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }
	function done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }
	function insertAdjacentHTML(){ $this->_call('insertAdjacentHTML',func_get_args()); return $this; }
	function insertAdjacentText(){ $this->_call('insertAdjacentText',func_get_args()); return $this; }
	function click(){ $this->_call('click',func_get_args()); return $this; }
	function insertAdjacentElement(){ $this->_call('insertAdjacentElement',func_get_args()); return $this; }
	function getAttribute(){ $this->_call('getAttribute',func_get_args()); return $this; }
	function setAttribute(){ $this->_call('setAttribute',func_get_args()); return $this; }
	function removeAttribute(){ $this->_call('removeAttribute',func_get_args()); return $this; }
	function getAttributeNode(){ $this->_call('getAttributeNode',func_get_args()); return $this; }
	function getElementsByTagName(){ $this->_call('getElementsByTagName',func_get_args()); return $this; }
	function getAttributeNS(){ $this->_call('getAttributeNS',func_get_args()); return $this; }
	function setAttributeNS(){ $this->_call('setAttributeNS',func_get_args()); return $this; }
	function removeAttributeNS(){ $this->_call('removeAttributeNS',func_get_args()); return $this; }
	function getElementsByTagNameNS(){ $this->_call('getElementsByTagNameNS',func_get_args()); return $this; }
	function getAttributeNodeNS(){ $this->_call('getAttributeNodeNS',func_get_args()); return $this; }
	function hasAttribute(){ $this->_call('hasAttribute',func_get_args()); return $this; }
	function hasAttributeNS(){ $this->_call('hasAttributeNS',func_get_args()); return $this; }
	function focus(){ $this->_call('focus',func_get_args()); return $this; }
	function blur(){ $this->_call('blur',func_get_args()); return $this; }
	function scrollIntoView(){ $this->_call('scrollIntoView',func_get_args()); return $this; }
	function scrollIntoViewIfNeeded(){ $this->_call('scrollIntoViewIfNeeded',func_get_args()); return $this; }
	function scrollByLines(){ $this->_call('scrollByLines',func_get_args()); return $this; }
	function scrollByPages(){ $this->_call('scrollByPages',func_get_args()); return $this; }
	function getElementsByClassName(){ $this->_call('getElementsByClassName',func_get_args()); return $this; }
	function querySelector(){ $this->_call('querySelector',func_get_args()); return $this; }
	function querySelectorAll(){ $this->_call('querySelectorAll',func_get_args()); return $this; }
	function webkitMatchesSelector(){ $this->_call('webkitMatchesSelector',func_get_args()); return $this; }
	function remove(){ $this->_call('remove',func_get_args()); return $this; }
	function getClientRects(){ $this->_call('getClientRects',func_get_args()); return $this; }
	function getBoundingClientRect(){ $this->_call('getBoundingClientRect',func_get_args()); return $this; }
	function webkitRequestPointerLock(){ $this->_call('webkitRequestPointerLock',func_get_args()); return $this; }
	function setAttributeNode(){ $this->_call('setAttributeNode',func_get_args()); return $this; }
	function removeAttributeNode(){ $this->_call('removeAttributeNode',func_get_args()); return $this; }
	function setAttributeNodeNS(){ $this->_call('setAttributeNodeNS',func_get_args()); return $this; }
	function webkitCreateShadowRoot(){ $this->_call('webkitCreateShadowRoot',func_get_args()); return $this; }
	function webkitRequestFullScreen(){ $this->_call('webkitRequestFullScreen',func_get_args()); return $this; }
	function insertBefore(){ $this->_call('insertBefore',func_get_args()); return $this; }
	function replaceChild(){ $this->_call('replaceChild',func_get_args()); return $this; }
	function removeChild(){ $this->_call('removeChild',func_get_args()); return $this; }
	function appendChild(){ $this->_call('appendChild',func_get_args()); return $this; }
	function hasChildNodes(){ $this->_call('hasChildNodes',func_get_args()); return $this; }
	function cloneNode(){ $this->_call('cloneNode',func_get_args()); return $this; }
	function normalize(){ $this->_call('normalize',func_get_args()); return $this; }
	function isSupported(){ $this->_call('isSupported',func_get_args()); return $this; }
	function hasAttributes(){ $this->_call('hasAttributes',func_get_args()); return $this; }
	function lookupPrefix(){ $this->_call('lookupPrefix',func_get_args()); return $this; }
	function isDefaultNamespace(){ $this->_call('isDefaultNamespace',func_get_args()); return $this; }
	function lookupNamespaceURI(){ $this->_call('lookupNamespaceURI',func_get_args()); return $this; }
	function addEventListener(){ $this->_call('addEventListener',func_get_args()); return $this; }
	function removeEventListener(){ $this->_call('removeEventListener',func_get_args()); return $this; }
	function isSameNode(){ $this->_call('isSameNode',func_get_args()); return $this; }
	function isEqualNode(){ $this->_call('isEqualNode',func_get_args()); return $this; }
	function compareDocumentPosition(){ $this->_call('compareDocumentPosition',func_get_args()); return $this; }
	function contains(){ $this->_call('contains',func_get_args()); return $this; }
	function dispatchEvent(){ $this->_call('dispatchEvent',func_get_args()); return $this; }
}

class PHInput{
	private $_main=false;
	public $_id;
	private $_type='input';
	public $useMap;
	public $align;
	public $selectionDirection;
	public $validationMessage;
	public $value;
	public $defaultValue;
	public $type;
	public $step;
	public $src;
	public $placeholder;
	public $pattern;
	public $name;
	public $min;
	public $max;
	public $formTarget;
	public $formMethod;
	public $formEnctype;
	public $formAction;
	public $dirName;
	public $autocomplete;
	public $alt;
	public $accept;
	public $contentEditable;
	public $outerText;
	public $outerHTML;
	public $innerText;
	public $innerHTML;
	public $accessKey;
	public $webkitdropzone;
	public $dir;
	public $lang;
	public $title;
	public $id;
	public $webkitPseudo;
	public $className;
	public $tagName;
	public $textContent;
	public $baseURI;
	public $localName;
	public $namespaceURI;
	public $nodeName;
	public function __construct() { global $__obj;array_push($__obj['obj'],$this); $this->_id=uniqid(); }
	private function _call($fn,$a) { global $__obj;$args=Array(); for ($i=0;$i<count($a);$i++) array_push($args,is_object($a[$i])&&$a[$i]->_id?Array('_'=>$a[$i]->_id):$a[$i]); array_push($__obj['call'],Array($this->_id,$fn,$args)); }
	function _serialize(){ $out=Array(); foreach ($this as $k=>$v) if (isset($this->$k)) $out[$k]=$this->$k; return $out; }
	function done(){ global $__obj; $this->_main=true; $out=Array('call'=>$__obj['call'],'obj'=>Array()); for ($i=0;$i<count($__obj['obj']);$i++) $out['obj'][$i]=$__obj['obj'][$i]->_serialize(); echo json_encode($out); }
	function stepUp(){ $this->_call('stepUp',func_get_args()); return $this; }
	function stepDown(){ $this->_call('stepDown',func_get_args()); return $this; }
	function checkValidity(){ $this->_call('checkValidity',func_get_args()); return $this; }
	function setCustomValidity(){ $this->_call('setCustomValidity',func_get_args()); return $this; }
	function select(){ $this->_call('select',func_get_args()); return $this; }
	function setRangeText(){ $this->_call('setRangeText',func_get_args()); return $this; }
	function setSelectionRange(){ $this->_call('setSelectionRange',func_get_args()); return $this; }
	function insertAdjacentHTML(){ $this->_call('insertAdjacentHTML',func_get_args()); return $this; }
	function insertAdjacentText(){ $this->_call('insertAdjacentText',func_get_args()); return $this; }
	function click(){ $this->_call('click',func_get_args()); return $this; }
	function insertAdjacentElement(){ $this->_call('insertAdjacentElement',func_get_args()); return $this; }
	function getAttribute(){ $this->_call('getAttribute',func_get_args()); return $this; }
	function setAttribute(){ $this->_call('setAttribute',func_get_args()); return $this; }
	function removeAttribute(){ $this->_call('removeAttribute',func_get_args()); return $this; }
	function getAttributeNode(){ $this->_call('getAttributeNode',func_get_args()); return $this; }
	function getElementsByTagName(){ $this->_call('getElementsByTagName',func_get_args()); return $this; }
	function getAttributeNS(){ $this->_call('getAttributeNS',func_get_args()); return $this; }
	function setAttributeNS(){ $this->_call('setAttributeNS',func_get_args()); return $this; }
	function removeAttributeNS(){ $this->_call('removeAttributeNS',func_get_args()); return $this; }
	function getElementsByTagNameNS(){ $this->_call('getElementsByTagNameNS',func_get_args()); return $this; }
	function getAttributeNodeNS(){ $this->_call('getAttributeNodeNS',func_get_args()); return $this; }
	function hasAttribute(){ $this->_call('hasAttribute',func_get_args()); return $this; }
	function hasAttributeNS(){ $this->_call('hasAttributeNS',func_get_args()); return $this; }
	function focus(){ $this->_call('focus',func_get_args()); return $this; }
	function blur(){ $this->_call('blur',func_get_args()); return $this; }
	function scrollIntoView(){ $this->_call('scrollIntoView',func_get_args()); return $this; }
	function scrollIntoViewIfNeeded(){ $this->_call('scrollIntoViewIfNeeded',func_get_args()); return $this; }
	function scrollByLines(){ $this->_call('scrollByLines',func_get_args()); return $this; }
	function scrollByPages(){ $this->_call('scrollByPages',func_get_args()); return $this; }
	function getElementsByClassName(){ $this->_call('getElementsByClassName',func_get_args()); return $this; }
	function querySelector(){ $this->_call('querySelector',func_get_args()); return $this; }
	function querySelectorAll(){ $this->_call('querySelectorAll',func_get_args()); return $this; }
	function webkitMatchesSelector(){ $this->_call('webkitMatchesSelector',func_get_args()); return $this; }
	function remove(){ $this->_call('remove',func_get_args()); return $this; }
	function getClientRects(){ $this->_call('getClientRects',func_get_args()); return $this; }
	function getBoundingClientRect(){ $this->_call('getBoundingClientRect',func_get_args()); return $this; }
	function webkitRequestPointerLock(){ $this->_call('webkitRequestPointerLock',func_get_args()); return $this; }
	function setAttributeNode(){ $this->_call('setAttributeNode',func_get_args()); return $this; }
	function removeAttributeNode(){ $this->_call('removeAttributeNode',func_get_args()); return $this; }
	function setAttributeNodeNS(){ $this->_call('setAttributeNodeNS',func_get_args()); return $this; }
	function webkitCreateShadowRoot(){ $this->_call('webkitCreateShadowRoot',func_get_args()); return $this; }
	function webkitRequestFullScreen(){ $this->_call('webkitRequestFullScreen',func_get_args()); return $this; }
	function insertBefore(){ $this->_call('insertBefore',func_get_args()); return $this; }
	function replaceChild(){ $this->_call('replaceChild',func_get_args()); return $this; }
	function removeChild(){ $this->_call('removeChild',func_get_args()); return $this; }
	function appendChild(){ $this->_call('appendChild',func_get_args()); return $this; }
	function hasChildNodes(){ $this->_call('hasChildNodes',func_get_args()); return $this; }
	function cloneNode(){ $this->_call('cloneNode',func_get_args()); return $this; }
	function normalize(){ $this->_call('normalize',func_get_args()); return $this; }
	function isSupported(){ $this->_call('isSupported',func_get_args()); return $this; }
	function hasAttributes(){ $this->_call('hasAttributes',func_get_args()); return $this; }
	function lookupPrefix(){ $this->_call('lookupPrefix',func_get_args()); return $this; }
	function isDefaultNamespace(){ $this->_call('isDefaultNamespace',func_get_args()); return $this; }
	function lookupNamespaceURI(){ $this->_call('lookupNamespaceURI',func_get_args()); return $this; }
	function addEventListener(){ $this->_call('addEventListener',func_get_args()); return $this; }
	function removeEventListener(){ $this->_call('removeEventListener',func_get_args()); return $this; }
	function isSameNode(){ $this->_call('isSameNode',func_get_args()); return $this; }
	function isEqualNode(){ $this->_call('isEqualNode',func_get_args()); return $this; }
	function compareDocumentPosition(){ $this->_call('compareDocumentPosition',func_get_args()); return $this; }
	function contains(){ $this->_call('contains',func_get_args()); return $this; }
	function dispatchEvent(){ $this->_call('dispatchEvent',func_get_args()); return $this; }
}

?>