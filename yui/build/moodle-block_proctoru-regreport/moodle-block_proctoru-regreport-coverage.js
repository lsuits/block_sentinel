if (typeof __coverage__ === 'undefined') { __coverage__ = {}; }
if (!__coverage__['build/moodle-block_proctoru-regreport/moodle-block_proctoru-regreport.js']) {
   __coverage__['build/moodle-block_proctoru-regreport/moodle-block_proctoru-regreport.js'] = {"path":"build/moodle-block_proctoru-regreport/moodle-block_proctoru-regreport.js","s":{"1":0,"2":0,"3":0,"4":0,"5":0},"b":{"1":[0,0]},"f":{"1":0,"2":0},"fnMap":{"1":{"name":"(anonymous_1)","line":1,"loc":{"start":{"line":1,"column":43},"end":{"line":1,"column":62}}},"2":{"name":"(anonymous_2)","line":5,"loc":{"start":{"line":5,"column":8},"end":{"line":5,"column":23}}}},"statementMap":{"1":{"start":{"line":1,"column":0},"end":{"line":19,"column":65}},"2":{"start":{"line":3,"column":0},"end":{"line":3,"column":42}},"3":{"start":{"line":4,"column":0},"end":{"line":17,"column":2}},"4":{"start":{"line":7,"column":4},"end":{"line":13,"column":7}},"5":{"start":{"line":15,"column":4},"end":{"line":15,"column":28}}},"branchMap":{"1":{"line":3,"type":"binary-expr","locations":[{"start":{"line":3,"column":19},"end":{"line":3,"column":35}},{"start":{"line":3,"column":39},"end":{"line":3,"column":41}}]}},"code":["(function () { YUI.add('moodle-block_proctoru-regreport', function (Y, NAME) {","","M.block_proctoru = M.block_proctoru || {};","M.block_proctoru.regreport = {","  init: function(data) {","","    var table = new Y.DataTable({","        columns:    ['firstname','lastname','idnumber', 'status', 'role'],","        data:       data,","        sortable:   true,","        scrollable: 'y',","        height:     '600px'","    });","    ","    table.render('#report');","  }","};","","}, '@VERSION@', {\"requires\": [\"datatable\", \"datatable-scroll\"]});","","}());"]};
}
var __cov_wJc95nMkPmA2i2wn5nJrvw = __coverage__['build/moodle-block_proctoru-regreport/moodle-block_proctoru-regreport.js'];
__cov_wJc95nMkPmA2i2wn5nJrvw.s['1']++;YUI.add('moodle-block_proctoru-regreport',function(Y,NAME){__cov_wJc95nMkPmA2i2wn5nJrvw.f['1']++;__cov_wJc95nMkPmA2i2wn5nJrvw.s['2']++;M.block_proctoru=(__cov_wJc95nMkPmA2i2wn5nJrvw.b['1'][0]++,M.block_proctoru)||(__cov_wJc95nMkPmA2i2wn5nJrvw.b['1'][1]++,{});__cov_wJc95nMkPmA2i2wn5nJrvw.s['3']++;M.block_proctoru.regreport={init:function(data){__cov_wJc95nMkPmA2i2wn5nJrvw.f['2']++;__cov_wJc95nMkPmA2i2wn5nJrvw.s['4']++;var table=new Y.DataTable({columns:['firstname','lastname','idnumber','status','role'],data:data,sortable:true,scrollable:'y',height:'600px'});__cov_wJc95nMkPmA2i2wn5nJrvw.s['5']++;table.render('#report');}};},'@VERSION@',{'requires':['datatable','datatable-scroll']});
