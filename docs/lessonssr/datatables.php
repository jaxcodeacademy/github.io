<section id="json" class="doc-section">
<h2 class="section-title">DataTables</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
DataTables: <a href="https://datatables.net/" target="_blank">https://datatables.net/</a><br><br>
Put the following 3 code sections into a webpage:<br><br>
<!-- content starts -->
Put this in the &lt;head&gt;:
<div class="code-block">
<pre><code class="language-markup">&lt;script src="https://code.jquery.com/jquery-3.3.1.js"&gt;&lt;/script&gt;
&lt;script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"&gt;</code></pre></div><!--//code-block-->

Put this in the &lt;body&gt;:
<div class="code-block">
<pre><code class="language-markup">&lt;table id="example" class="display" style="width:100%"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th&gt;Age&lt;/th&gt;
                &lt;th&gt;Start date&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Tiger Nixon&lt;/td&gt;
                &lt;td&gt;System Architect&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;61&lt;/td&gt;
                &lt;td&gt;2011/04/25&lt;/td&gt;
                &lt;td&gt;$320,800&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Garrett Winters&lt;/td&gt;
                &lt;td&gt;Accountant&lt;/td&gt;
                &lt;td&gt;Tokyo&lt;/td&gt;
                &lt;td&gt;63&lt;/td&gt;
                &lt;td&gt;2011/07/25&lt;/td&gt;
                &lt;td&gt;$170,750&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Ashton Cox&lt;/td&gt;
                &lt;td&gt;Junior Technical Author&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;66&lt;/td&gt;
                &lt;td&gt;2009/01/12&lt;/td&gt;
                &lt;td&gt;$86,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Cedric Kelly&lt;/td&gt;
                &lt;td&gt;Senior Javascript Developer&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;2012/03/29&lt;/td&gt;
                &lt;td&gt;$433,060&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Airi Satou&lt;/td&gt;
                &lt;td&gt;Accountant&lt;/td&gt;
                &lt;td&gt;Tokyo&lt;/td&gt;
                &lt;td&gt;33&lt;/td&gt;
                &lt;td&gt;2008/11/28&lt;/td&gt;
                &lt;td&gt;$162,700&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Brielle Williamson&lt;/td&gt;
                &lt;td&gt;Integration Specialist&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;61&lt;/td&gt;
                &lt;td&gt;2012/12/02&lt;/td&gt;
                &lt;td&gt;$372,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Herrod Chandler&lt;/td&gt;
                &lt;td&gt;Sales Assistant&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;59&lt;/td&gt;
                &lt;td&gt;2012/08/06&lt;/td&gt;
                &lt;td&gt;$137,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Rhona Davidson&lt;/td&gt;
                &lt;td&gt;Integration Specialist&lt;/td&gt;
                &lt;td&gt;Tokyo&lt;/td&gt;
                &lt;td&gt;55&lt;/td&gt;
                &lt;td&gt;2010/10/14&lt;/td&gt;
                &lt;td&gt;$327,900&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Colleen Hurst&lt;/td&gt;
                &lt;td&gt;Javascript Developer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;39&lt;/td&gt;
                &lt;td&gt;2009/09/15&lt;/td&gt;
                &lt;td&gt;$205,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Sonya Frost&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;23&lt;/td&gt;
                &lt;td&gt;2008/12/13&lt;/td&gt;
                &lt;td&gt;$103,600&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jena Gaines&lt;/td&gt;
                &lt;td&gt;Office Manager&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;30&lt;/td&gt;
                &lt;td&gt;2008/12/19&lt;/td&gt;
                &lt;td&gt;$90,560&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Quinn Flynn&lt;/td&gt;
                &lt;td&gt;Support Lead&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;2013/03/03&lt;/td&gt;
                &lt;td&gt;$342,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Charde Marshall&lt;/td&gt;
                &lt;td&gt;Regional Director&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;36&lt;/td&gt;
                &lt;td&gt;2008/10/16&lt;/td&gt;
                &lt;td&gt;$470,600&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Haley Kennedy&lt;/td&gt;
                &lt;td&gt;Senior Marketing Designer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;43&lt;/td&gt;
                &lt;td&gt;2012/12/18&lt;/td&gt;
                &lt;td&gt;$313,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Tatyana Fitzpatrick&lt;/td&gt;
                &lt;td&gt;Regional Director&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;19&lt;/td&gt;
                &lt;td&gt;2010/03/17&lt;/td&gt;
                &lt;td&gt;$385,750&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Michael Silva&lt;/td&gt;
                &lt;td&gt;Marketing Designer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;66&lt;/td&gt;
                &lt;td&gt;2012/11/27&lt;/td&gt;
                &lt;td&gt;$198,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Paul Byrd&lt;/td&gt;
                &lt;td&gt;Chief Financial Officer (CFO)&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;64&lt;/td&gt;
                &lt;td&gt;2010/06/09&lt;/td&gt;
                &lt;td&gt;$725,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Gloria Little&lt;/td&gt;
                &lt;td&gt;Systems Administrator&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;59&lt;/td&gt;
                &lt;td&gt;2009/04/10&lt;/td&gt;
                &lt;td&gt;$237,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Bradley Greer&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;41&lt;/td&gt;
                &lt;td&gt;2012/10/13&lt;/td&gt;
                &lt;td&gt;$132,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Dai Rios&lt;/td&gt;
                &lt;td&gt;Personnel Lead&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;35&lt;/td&gt;
                &lt;td&gt;2012/09/26&lt;/td&gt;
                &lt;td&gt;$217,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jenette Caldwell&lt;/td&gt;
                &lt;td&gt;Development Lead&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;30&lt;/td&gt;
                &lt;td&gt;2011/09/03&lt;/td&gt;
                &lt;td&gt;$345,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Yuri Berry&lt;/td&gt;
                &lt;td&gt;Chief Marketing Officer (CMO)&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;40&lt;/td&gt;
                &lt;td&gt;2009/06/25&lt;/td&gt;
                &lt;td&gt;$675,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Caesar Vance&lt;/td&gt;
                &lt;td&gt;Pre-Sales Support&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;21&lt;/td&gt;
                &lt;td&gt;2011/12/12&lt;/td&gt;
                &lt;td&gt;$106,450&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Doris Wilder&lt;/td&gt;
                &lt;td&gt;Sales Assistant&lt;/td&gt;
                &lt;td&gt;Sidney&lt;/td&gt;
                &lt;td&gt;23&lt;/td&gt;
                &lt;td&gt;2010/09/20&lt;/td&gt;
                &lt;td&gt;$85,600&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Angelica Ramos&lt;/td&gt;
                &lt;td&gt;Chief Executive Officer (CEO)&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;47&lt;/td&gt;
                &lt;td&gt;2009/10/09&lt;/td&gt;
                &lt;td&gt;$1,200,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Gavin Joyce&lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;42&lt;/td&gt;
                &lt;td&gt;2010/12/22&lt;/td&gt;
                &lt;td&gt;$92,575&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jennifer Chang&lt;/td&gt;
                &lt;td&gt;Regional Director&lt;/td&gt;
                &lt;td&gt;Singapore&lt;/td&gt;
                &lt;td&gt;28&lt;/td&gt;
                &lt;td&gt;2010/11/14&lt;/td&gt;
                &lt;td&gt;$357,650&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Brenden Wagner&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;28&lt;/td&gt;
                &lt;td&gt;2011/06/07&lt;/td&gt;
                &lt;td&gt;$206,850&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Fiona Green&lt;/td&gt;
                &lt;td&gt;Chief Operating Officer (COO)&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;48&lt;/td&gt;
                &lt;td&gt;2010/03/11&lt;/td&gt;
                &lt;td&gt;$850,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Shou Itou&lt;/td&gt;
                &lt;td&gt;Regional Marketing&lt;/td&gt;
                &lt;td&gt;Tokyo&lt;/td&gt;
                &lt;td&gt;20&lt;/td&gt;
                &lt;td&gt;2011/08/14&lt;/td&gt;
                &lt;td&gt;$163,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Michelle House&lt;/td&gt;
                &lt;td&gt;Integration Specialist&lt;/td&gt;
                &lt;td&gt;Sidney&lt;/td&gt;
                &lt;td&gt;37&lt;/td&gt;
                &lt;td&gt;2011/06/02&lt;/td&gt;
                &lt;td&gt;$95,400&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Suki Burks&lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;53&lt;/td&gt;
                &lt;td&gt;2009/10/22&lt;/td&gt;
                &lt;td&gt;$114,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Prescott Bartlett&lt;/td&gt;
                &lt;td&gt;Technical Author&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;27&lt;/td&gt;
                &lt;td&gt;2011/05/07&lt;/td&gt;
                &lt;td&gt;$145,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Gavin Cortez&lt;/td&gt;
                &lt;td&gt;Team Leader&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;2008/10/26&lt;/td&gt;
                &lt;td&gt;$235,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Martena Mccray&lt;/td&gt;
                &lt;td&gt;Post-Sales support&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;46&lt;/td&gt;
                &lt;td&gt;2011/03/09&lt;/td&gt;
                &lt;td&gt;$324,050&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Unity Butler&lt;/td&gt;
                &lt;td&gt;Marketing Designer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;47&lt;/td&gt;
                &lt;td&gt;2009/12/09&lt;/td&gt;
                &lt;td&gt;$85,675&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Howard Hatfield&lt;/td&gt;
                &lt;td&gt;Office Manager&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;51&lt;/td&gt;
                &lt;td&gt;2008/12/16&lt;/td&gt;
                &lt;td&gt;$164,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Hope Fuentes&lt;/td&gt;
                &lt;td&gt;Secretary&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;41&lt;/td&gt;
                &lt;td&gt;2010/02/12&lt;/td&gt;
                &lt;td&gt;$109,850&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Vivian Harrell&lt;/td&gt;
                &lt;td&gt;Financial Controller&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;62&lt;/td&gt;
                &lt;td&gt;2009/02/14&lt;/td&gt;
                &lt;td&gt;$452,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Timothy Mooney&lt;/td&gt;
                &lt;td&gt;Office Manager&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;37&lt;/td&gt;
                &lt;td&gt;2008/12/11&lt;/td&gt;
                &lt;td&gt;$136,200&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jackson Bradshaw&lt;/td&gt;
                &lt;td&gt;Director&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;65&lt;/td&gt;
                &lt;td&gt;2008/09/26&lt;/td&gt;
                &lt;td&gt;$645,750&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Olivia Liang&lt;/td&gt;
                &lt;td&gt;Support Engineer&lt;/td&gt;
                &lt;td&gt;Singapore&lt;/td&gt;
                &lt;td&gt;64&lt;/td&gt;
                &lt;td&gt;2011/02/03&lt;/td&gt;
                &lt;td&gt;$234,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Bruno Nash&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;38&lt;/td&gt;
                &lt;td&gt;2011/05/03&lt;/td&gt;
                &lt;td&gt;$163,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Sakura Yamamoto&lt;/td&gt;
                &lt;td&gt;Support Engineer&lt;/td&gt;
                &lt;td&gt;Tokyo&lt;/td&gt;
                &lt;td&gt;37&lt;/td&gt;
                &lt;td&gt;2009/08/19&lt;/td&gt;
                &lt;td&gt;$139,575&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Thor Walton&lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;61&lt;/td&gt;
                &lt;td&gt;2013/08/11&lt;/td&gt;
                &lt;td&gt;$98,540&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Finn Camacho&lt;/td&gt;
                &lt;td&gt;Support Engineer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;47&lt;/td&gt;
                &lt;td&gt;2009/07/07&lt;/td&gt;
                &lt;td&gt;$87,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Serge Baldwin&lt;/td&gt;
                &lt;td&gt;Data Coordinator&lt;/td&gt;
                &lt;td&gt;Singapore&lt;/td&gt;
                &lt;td&gt;64&lt;/td&gt;
                &lt;td&gt;2012/04/09&lt;/td&gt;
                &lt;td&gt;$138,575&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Zenaida Frank&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;63&lt;/td&gt;
                &lt;td&gt;2010/01/04&lt;/td&gt;
                &lt;td&gt;$125,250&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Zorita Serrano&lt;/td&gt;
                &lt;td&gt;Software Engineer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;56&lt;/td&gt;
                &lt;td&gt;2012/06/01&lt;/td&gt;
                &lt;td&gt;$115,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jennifer Acosta&lt;/td&gt;
                &lt;td&gt;Junior Javascript Developer&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;43&lt;/td&gt;
                &lt;td&gt;2013/02/01&lt;/td&gt;
                &lt;td&gt;$75,650&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Cara Stevens&lt;/td&gt;
                &lt;td&gt;Sales Assistant&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;46&lt;/td&gt;
                &lt;td&gt;2011/12/06&lt;/td&gt;
                &lt;td&gt;$145,600&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Hermione Butler&lt;/td&gt;
                &lt;td&gt;Regional Director&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;47&lt;/td&gt;
                &lt;td&gt;2011/03/21&lt;/td&gt;
                &lt;td&gt;$356,250&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Lael Greer&lt;/td&gt;
                &lt;td&gt;Systems Administrator&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td&gt;21&lt;/td&gt;
                &lt;td&gt;2009/02/27&lt;/td&gt;
                &lt;td&gt;$103,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jonas Alexander&lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;San Francisco&lt;/td&gt;
                &lt;td&gt;30&lt;/td&gt;
                &lt;td&gt;2010/07/14&lt;/td&gt;
                &lt;td&gt;$86,500&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Shad Decker&lt;/td&gt;
                &lt;td&gt;Regional Director&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;51&lt;/td&gt;
                &lt;td&gt;2008/11/13&lt;/td&gt;
                &lt;td&gt;$183,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Michael Bruce&lt;/td&gt;
                &lt;td&gt;Javascript Developer&lt;/td&gt;
                &lt;td&gt;Singapore&lt;/td&gt;
                &lt;td&gt;29&lt;/td&gt;
                &lt;td&gt;2011/06/27&lt;/td&gt;
                &lt;td&gt;$183,000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Donna Snider&lt;/td&gt;
                &lt;td&gt;Customer Support&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td&gt;27&lt;/td&gt;
                &lt;td&gt;2011/01/25&lt;/td&gt;
                &lt;td&gt;$112,000&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th&gt;Age&lt;/th&gt;
                &lt;th&gt;Start date&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;</code></pre></div><!--//code-block-->

Put this just before the closing &lt;/body&gt;:
<div class="code-block">
<pre><code class="language-markup">&lt;script&gt;
$(document).ready(function() {
    $('#example').DataTable();
} );
&lt;/script&gt;</code></pre></div><!--//code-block-->


</div><!--//code-block-->
<!-- content ends -->
</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h3>Assignment 1</h3>
<br>
Create a DataTable that loads data using AJAX<br>
<a href="https://datatables.net/examples/data_sources/ajax.html" target="_blank">https://datatables.net/examples/data_sources/ajax.html</a>
<br><br>
<h3>Assignment 2</h3>
<br>
Create a DataTable that loads data from a MySQL table using AJAX<br>
<a href="https://datatables.net/examples/data_sources/server_side.html" target="_blank">https://datatables.net/examples/data_sources/server_side.html</a><br>
You will need this supporting library: <a href="https://github.com/DataTables/DataTablesSrc/blob/master/examples/server_side/scripts/ssp.class.php" target="_blank">ssp.class.php</a>


<br><br>

<!-- end of assignemtns-->


</div>
</div>
</section><!--//doc-section-->


