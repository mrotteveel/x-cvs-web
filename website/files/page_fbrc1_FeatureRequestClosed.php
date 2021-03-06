<?php
if (eregi("page_fbrc1_FeatureRequestClosed.php",$PHP_SELF)) {
  Header("Location: index.php");
  die();
}
?>

<table>
<tr><td width="100%" valign=top><font face="Verdana">
<h4>RC1 - Closed Feature Requests</h4>
<b> Category: Client/GDS32                   </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447396&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447396
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447396&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
TCP Port 3050 used by default
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The client and server will now use TCP port 3050 if no entry in the Services file is found.<br>
<br>
This should solve a common client/server installation problem.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447400&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447400
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447400&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
TCP Port in connect string
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The TCP port can now be specified in the connection string, thus allowing for easy support for port # other than 3050.<br>
<br>
For Win32, the connect string would be: "Server/Port:Drive\Directory\Database.gdb", for other ports it would be "Server/Port:/device/Directory/Database.gdb"<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=480749&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
480749
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=480749&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
isc_database_info() returns counter values
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The isc_database_info() call now returns the counter values for:<br>
   - Oldest Transaction<br>
   - Oldest Active Transaction<br>
   - Oldest Snapshot<br>
   - Next Transaction<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: Core Engine                    </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446173&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
446173
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446173&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
64 Bit Database I/O
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Enable 64bit file I/O to allow for single database files to exceed 2/4GB in size.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=421028&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
421028
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=421028&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Automatic Affinity in ibserver startup
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
This is a Windows NT/2000 issue.<br>
<br>
At startup the engine will look in the IBConfig file for the new "CPU_AFFINITY_MASK" value to determine the CPU mask to use for the server process. The default setting is CPU 0 (the first CPU).<br>
<br>
The value is a bit-mask, accordingly, a mask value of "3" represents CPU 0 and CPU 1 and "8" represents CPU 4.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446181&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
446181
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446181&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Enable support for 16kb pages
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Modify the engine and GBAK routines to allow for the an increased page size to be specified beyond the current 8kb page size.<br>
<br>
This will allow for a greater database size as well as can allow for the developer to tune the database to meet their hardware environment.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447008&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447008
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447008&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Win32 Forced Writes Default = ON
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
With the introduction of IB 6.0 the default settings for newly created databases, under Win32, was changed to OFF.  This change was made to improve database performance but at the expense of database integrity/recovery.<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: DSQL                           </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446177&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
446177
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446177&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Add TOP/First and LIMIT syntax to SELECT
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Add TOP/First and LIMIT syntax to SELECT statements, ala mySQL and PostgreSQL.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447020&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447020
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447020&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Case Insensitive Hungarian Collation Set
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The new case insensitive Hungarian collation set, developed and tested by Sandor Szollosi (ssani@freemail.hu).<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447009&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447009
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447009&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
DROP GENERATOR implemented
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The command DROP GENERATOR has been implemented.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447014&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447014
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447014&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Double hyphen (--) as comment
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Some tool devs and end users claimed for one-line comment as other servers have. They aren't recognized in other position, so don't count of them being as flexible as C++ double-slash token.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446237&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
446237
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446237&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Eliminate "Column not found error"
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
This has to be one of the most frustrating error messages which the system produces.  The system now reports the name of the unknown column as well as the line/column position of the reference.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447405&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447405
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447405&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Group By UDF()
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
UDFs can now be used when specifying GROUP BY syntax.<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447404&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447404
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447404&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Incomplete Alter Domain kills IB
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The following incomplete SQL command, kills the engine:</font><font face="Courier New" size=2><pre>
   alter domain dom set;</pre></font><font face="Verdana" size=1>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447380&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447380
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447380&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Recreate Table syntax
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The RECREATE TABLE has EXACTLY the same syntax as CREATE TABLE.<br>
<br>
The only difference is that the latter will drop the table if it already exists before creating the new one. If there's no previous table, it simply behaves exactly as CREATE. RECREATE will only complain if (of course) there's some dependency on the table being redefined or the table is being used currently.<br>
<br>
RECREATE is a workaround for the problem of dropping a table before you can create it again. The problem is that dropping it can produce several errors, for example, table in use, table has dependencies and table doesn't exist.<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: GBAK                           </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447391&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447391
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447391&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
New option for -V switch
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The -V (Verbose) option of GBAK now allows for a 'counter' value to be specified -- i.e. GBAK ... -V 20000<br>
<br>
This value will provide additional user feedback, as the data rows are backed-up or restored.  Once GBAK has processed the defined number of rows (either backed-up/restored or re-indexed), GBAK will print message indicating the running row count value.<br>
<br>
By default, the counter value is 10,000.<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: ISQL                           </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=451414&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
451414
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=451414&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
New PLANONLY option
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Support for PLANONLY setting, allows for a statement/query to be submitted to the engine and the plan retrieved, without executing the statement/query.<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: Linux ports                    </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=451415&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
451415
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=451415&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Added -NONAGLE switch
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
Disabling the TCP/IP Nagle Algorithm typically improves speed on slow networks.<br>
<br>
The Nagle TCP/IP algorithm was designed to avoid problems with small packets, called tinygrams, on slow networks. The algorithm says that a TCP/IP connection can have only one outstanding small segment that has not yet been acknowledged. The definition of small varies but usually it is defined as less than the segment size which on ethernet is about 1500 bytes.<br>
<br>
By default, the socket library will use an internal algorithm known as Nagle's algorithm for buffering bytes on write before actually sending the data in order to minimise actual physical writes.<br>
<br>
The presence of the new switch on Linux allows developers to determine, for themselves, the possible pro's and con's of using this alternate packet handling approach.<br>
<hr size=1>
</td></tr>
 </table>
<b> Category: UDF/Built-In Functions         </b><p> <table>
<tr><td width="10%"><font face="Verdana"><b>
SF ID
</b></td><td width="75%"><font face="Verdana"><b>
Description
</b></td><td width="15%"><font face="Verdana"><b>
Group/Status
</b>&nbsp;</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447403&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447403
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447403&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
New SubStrLen UDF
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The new SubStrLen is to replace the previous SubStr function, which did not handle cases of position references beyond the end of the field data.<br>
<br>
The definition of the function is:<br>
   substrlen(str, start, length)<br>
where,<br>
  str - the string to be parsed<br>
  start - the string position to start from<br>
  length - the number of characters to return<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447004&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
447004
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=447004&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
New UDF Library using Descriptors
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
The new library FBUDF has been designed to use the new support for descriptors, thus enabling support for detecting null values. The new functions are as follows.<br>
<br>
Null testing:<br>
  NVL and NULLIF<br>
<br>
Date manupulation:<br>
  DOW =&amp;gt; (Day of Week) Monday, Tuesday, Wednesday ...<br>
  SDOW =&amp;gt; (Short Day of Week)  Mon, Tue, Wed, Thu ....<br>
  GetExactTimestamp =&amp;gt; Get current time, with milliseconds<br>
  AddMillisecond, AddSeconds, AddMinute, AddHour, AddDay, AddWeek, AddMonth and AddYear<br>
<br>
String manipulation:<br>
  RIGHT =&amp;gt; This will work only for 1-byte charsets.<br>
  STRING2BLOB =&amp;gt; String to BLOB<br>
<br>
Numeric manipulation:<br>
  TRUNCATE and ROUND<br>
<hr size=1>
</td></tr>
<tr><td width="10%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446208&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
446208
</a></b></td><td width="75%"><font face="Verdana"><b>
<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=109028&amp;aid=446208&amp;group_id=9028" style="text-decoration:none;color:#4169e1;">
Passing values by descriptor to UDFs
</a></b></td><td width="15%"><font face="Verdana"><b>
 Feature - Added v1.0
</b></td></tr>
<tr><td width="10%"><font face="Verdana">&nbsp;
</td><td colspan=2><font face="Verdana">
<br>
It is sometimes necessary to determine whether a values passed to a UDF is NULL.  The current approach which passes parameters by value prohibits this test -- a NULL is passed as an empty value, which can't be distinguish from a 'real' empty/zero value.<br>
<hr size=1>
</td></tr>
 </table>
</td></tr>
<tr><td><hr size=1></td></tr>
</table>
