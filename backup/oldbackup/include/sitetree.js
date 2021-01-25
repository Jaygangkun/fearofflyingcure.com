/* [nodename, id, name, navigationtext, href, isnavigation, childs[], templatename] */

if (typeof(decodeURIComponent) == 'undefined') {
  decodeURIComponent = function(s) {
    return unescape(s);
  }
}

function jdecode(s) {
    s = s.replace(/\+/g, "%20")
    return decodeURIComponent(s);
}

var POS_NODENAME=0;
var POS_ID=1;
var POS_NAME=2;
var POS_NAVIGATIONTEXT=3;
var POS_HREF=4;
var POS_ISNAVIGATION=5;
var POS_CHILDS=6;
var POS_TEMPLATENAME=7;
var POS_TARGET=8;
var theSitetree=[ 
	['PAGE','1401',jdecode('Home'),jdecode(''), jdecode('%2F1401.html'), 'true',[],'',''],
	['PAGE','1494',jdecode('Fear+of+Flying+Test'),jdecode(''), jdecode('%2F1494.html'), 'true',[],'',''],
	['PAGE','1601',jdecode('Other+Fears'),jdecode(''), jdecode('%2F1601.html'), 'true',[],'',''],
	['PAGE','1622',jdecode('Staff'),jdecode(''), jdecode('%2F1622.html'), 'true',[],'',''],
	['PAGE','1643',jdecode('Fear+of+Flying+Links'),jdecode(''), jdecode('%2F1643.html'), 'true',[],'',''],
	['PAGE','1664',jdecode('Testimonials'),jdecode(''), jdecode('%2F1664.html'), 'true',[],'',''],
	['PAGE','1685',jdecode('Contact+Us'),jdecode(''), jdecode('%2F1685.html'), 'true',[],'','']];
var siteelementCount=7;
theSitetree.topTemplateName='Porthole';
theSitetree.paletteFamily='064B91';
theSitetree.keyvisualId='6721';
theSitetree.keyvisualName='kv_6721.jpg';
theSitetree.fontsetId='11200';
theSitetree.graphicsetId='12013';
theSitetree.contentColor='000000';
theSitetree.contentBGColor='E9F3FF';
var localeDef={
  language: 'en',
  country: 'US'
};
var prodDef={
  wl_name: 'endurance',
  product: 'WSCSYSSSSLY0XRNC'
};
var theTemplate={
				hasFlashNavigation: 'false',
				hasFlashLogo: 	'false',
				hasFlashCompanyname: 'false',
				hasFlashElements: 'false',
				hasCompanyname: 'false',
				name: 			'Porthole',
				paletteFamily: 	'064B91',
				keyvisualId: 	'6721',
				keyvisualName: 	'kv_6721.jpg',
				fontsetId: 		'11200',
				graphicsetId: 	'12013',
				contentColor: 	'000000',
				contentBGColor: 'E9F3FF',
				a_color: 		'000000',
				b_color: 		'000000',
				c_color: 		'000000',
				d_color: 		'000000',
				e_color: 		'000000',
				f_color: 		'000000',
				hasCustomLogo: 	'false',
				contentFontFace:'Arial, Helvetica, sans-serif',
				contentFontSize:'12',
				useFavicon:     'false'
			  };
var webappMappings = {};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1401',
internalId:  '-',
customField: '20150427-112038'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1494',
internalId:  '-',
customField: '20150427-112330'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1601',
internalId:  '-',
customField: '20150430-181630'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1622',
internalId:  '-',
customField: '20150904-112531'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1643',
internalId:  '-',
customField: '20150430-185608'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1664',
internalId:  '-',
customField: '20150426-112304'
};
webappMappings['5000']=webappMappings['5000--']={
webappId:    '5000',
documentId:  '1685',
internalId:  '-',
customField: '20150426-111620'
};
webappMappings['7008']=webappMappings['7008-17762']={
webappId:    '7008',
documentId:  '1685',
internalId:  '17762',
customField: 'language:en;country:US;'
};
var webAppHostname = 'cgiwsc.enhancedsitebuilder.com:80';
var canonHostname = 'cmworker03.yourhostingaccount.com';
var accountId     = 'AENDU0I79UK7';
var companyName   = 'FEAR+OF+FLYING+TREATMENT+LA';
var htmlTitle	  = '';
var metaKeywords  = '';
var metaContents  = '';
theSitetree.getById = function(id, ar) {
	if (typeof(ar) == 'undefined'){
		ar = this;
	}
	for (var i=0; i < ar.length; i++) {
		if (ar[i][POS_ID] == id){
			return ar[i];
		}
		if (ar[i][POS_CHILDS].length > 0) {
			var result=this.getById(id, ar[i][POS_CHILDS]);
			if (result != null){
				return result;
			}
		}
	}
	return null;
};

theSitetree.getParentById = function(id, ar) {
	if (typeof(ar) == 'undefined'){
		ar = this;
	}
	for (var i=0; i < ar.length; i++) {
		for (var j = 0; j < ar[i][POS_CHILDS].length; j++) {
			if (ar[i][POS_CHILDS][j][POS_ID] == id) {
				// child found
				return ar[i];
			}
			var result=this.getParentById(id, ar[i][POS_CHILDS]);
			if (result != null){
				return result;
			}
		}
	}
	return null;
};

theSitetree.getName = function(id) {
	var elem = this.getById(id);
	if (elem != null){
		return elem[POS_NAME];
	}
	return null;
};

theSitetree.getNavigationText = function(id) {
	var elem = this.getById(id);
	if (elem != null){
		return elem[POS_NAVIGATIONTEXT];
	}
	return null;
};

theSitetree.getHREF = function(id) {
	var elem = this.getById(id);
	if (elem != null){
		return elem[POS_HREF];
	}
	return null;
};

theSitetree.getIsNavigation = function(id) {
	var elem = this.getById(id);
	if (elem != null){
		return elem[POS_ISNAVIGATION];
	}
	return null;
};

theSitetree.getTemplateName = function(id, lastTemplateName, ar) {
	if (typeof(lastTemplateName) == 'undefined'){
		lastTemplateName = this.topTemplateName;
	}
	if (typeof(ar) == 'undefined'){
		ar = this;
	}
	for (var i=0; i < ar.length; i++) {
		var actTemplateName = ar[i][POS_TEMPLATENAME];
		if (actTemplateName == ''){
			actTemplateName = lastTemplateName;
		}
		if (ar[i][POS_ID] == id) {
			return actTemplateName;
		}
		if (ar[i][POS_CHILDS].length > 0) {
			var result=this.getTemplateName(id, actTemplateName, ar[i][POS_CHILDS]);
			if (result != null){
				return result;
			}
		}
	}
	return null;
};

theSitetree.getByXx = function(lookup, xx, ar) {
    if (typeof(ar) == 'undefined'){
    	ar = this;
    }
    for (var i=0; i < ar.length; i++) {
        if (ar[i][xx] == lookup){
        	return ar[i];
        }
        if (ar[i][POS_CHILDS].length > 0) {
        	var result=this.getByXx(lookup, xx, ar[i][POS_CHILDS]);
            if (result != null){
                return result;
               }
        }
    }
    return null;
};

function gotoPage(lookup) {
	if(__path_prefix__ == "/servlet/CMServeRES" && typeof (changePage) == 'function'){
		changePage(lookup);
		return;
	}
	var page = theSitetree.getHREF(lookup);
	if (!page) {
		var testFor = [ POS_NAME, POS_NAVIGATIONTEXT ];
		for (var i=0 ; i < testFor.length ; i++) {
			var p = theSitetree.getByXx(lookup, testFor[i]);
			if (p != null) {
				page = p[POS_HREF];
				break;
			}
		}
	}
	document.location.href = (new URL(__path_prefix__ + page, true, true)).toString();
};
