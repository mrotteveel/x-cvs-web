<?php

######################################################################
# PHP-NUKE: Web Portal System
# ===========================
#
# Copyright (c) 2001 by Francisco Burzi (fburzi@ncc.org.ve)
# http://phpnuke.org
#
# This modules is to show the downloads section for users
#
# Based on MyPHPortal (http://sourceforge.net/projects/myphportal)
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License.
######################################################################

if (!isset($mainfile)) { include("mainfile.php"); }
$ipp = 20;


function callscript() {
echo "
<script>
<!--

NS4 = (document.layers) ? 1 : 0;
IE4 = (document.all) ? 1 : 0;

function show ( name ) {
  x = currentX;
  y = currentY + 20;
  if (NS4) {

    document.layers[name].xpos = parseInt ( x );
    document.layers[name].left = parseInt ( x );
    document.layers[name].ypos = parseInt ( y );
    document.layers[name].top = parseInt ( y );
    document.layers[name].visibility = \"show\";
  } else {
    document.all[name].style.left = parseInt ( x );
    document.all[name].style.top = parseInt ( y );
    document.all[name].style.visibility = \"visible\";
  }
}
function hide ( name ) {
  if (NS4) {
    document.layers[name].visibility = \"hide\";
  } else {
    document.all[name].style.visibility = \"hidden\";
  }
}

currentX = currentY = 0;

function grabEl(e) {
  if ( NS4 ) {
    currentX = e.pageX;
    currentY = e.pageY;
  } else {
    currentX = event.x;
    currentY = event.y;
  }
}

if ( NS4 ) {
  document.captureEvents(Event.MOUSEDOWN | Event.MOUSEMOVE);
}
document.onmousemove = grabEl;


//-->
</script>
";
}


function preface() {
  global $bgcolor1, $bgcolor2, $bgcolor3, $textcolor1, $textcolor2, $sitename;
?>

              
<div align="Center">
<p><font size="2"><font face="Lucida,Verdana,Helvetica,Arial" color="black" size="-1"><font color="#e13601" size="+2">
      Firebird MileStone Builds</font></font></font><br>
    </p>
</div>
       
<p><small><font size="2"><font face="Lucida,Verdana,Helvetica,Arial" color="black" size="-1"><font color="#e13601" size="+1">
      Milestone Builds (0.9.5)<br>
    </font></font></font></small><br>
 </p>
            <small>     </small><small>       </small><small>         </small><small>
        </small><small>       </small><small>         </small><small>   
    </small><small>       </small><small>         </small><small>       </small><small>
        </small><small>         </small><small>       </small><small>   
  </small>     <small>   </small>       
<table cellpadding="2" cellspacing="2" border="0" width="100%">
       <tbody>
         <tr>
           <td valign="Top" bgcolor="#e0e0e0"><small>Firebird 0.9.5 builds 
were built end of second  quarter of 2001.</small><small><br>
           </small><small>         </small></td>
           </tr>
         <tr>
           <td valign="Top" bgcolor="#e0e0e0"><small>         </small>  
      <small>           </small><small>             </small><small>     
         </small><small>                </small><small>             </small><small>
              </small><small>                </small><small>            
  </small><small>                     </small><small>           </small>
          <small>         </small>                          
      <table cellpadding="2" cellspacing="2" border="0" width="100%">
             <tbody>
               <tr>
                 <td valign="Middle" colspan="2"><big><small> MS Win32 binaries</small></big><small>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small></td>
                 <td valign="Top"><small><br>
                 </small><small>               </small></td>
                 </tr>
               <tr>
                 <td valign="Top" colspan="2"><small>                </small>
                                             
            <ul>
                   <small>                 </small>                     
                           
              <li><small><a href="/download/fb-Win32-Snapshot-0.9.5.156.zip">
      fb-Win32-Snapshot-0.9.5.156.zip</a>
                     </small><small>                   </small><small><br>
                     </small><small>                 </small></li>
                   <small>               </small>                       
                   
            </ul>
                 <small>               </small></td>
                 <td valign="Middle"><small>Firebird Super server install 
package  for win32 platforms</small><small><br>
                 </small><small>               </small></td>
                 </tr>
                                   
        </tbody>                
      </table>
           <small>         </small><small><br>
           </small><small>         </small></td>
           </tr>
         <tr>
           <td valign="Top" bgcolor="#e0e0e0"><small>         </small>  
      <small>           </small><small>             </small><small>     
         </small><small>                </small><small>             </small><small>
              </small><small>                </small><small>            
  </small><small>                     </small><small>             </small><small>
                </small><small>                </small><small>          
  </small><small>           </small>            <small>         </small>
                        
      <table cellpadding="2" cellspacing="2" border="0" width="100%">
             <tbody>
               <tr>
                 <td valign="Middle" colspan="2"> Linux i386 binaries</td>
                 <td valign="Middle"><small><br>
                 </small><small>               </small></td>
                 </tr>
               <tr>
                 <td valign="Middle" colspan="2" nowrap="true"><small>  
             </small>                                            
            <ul>
                   <small>                 </small>                     
                           
              <li><small><a href="/download/fb_cs-linux-i386-Snapshot-0.9.5.154.tar.gz">
      fb_cs-linux-i386-Snapshot-0.9.5.154.tar.gz</a>
                     </small><small>                 </small></li>
                   <small>               </small>                       
                   
            </ul>
                 <small>               </small></td>
                 <td valign="Middle"><small>Classic server packages for i386
  linux machines.&nbsp; A .tar.gz shell install is provided for general linux
  install.</small><small><br>
                 </small><small>               </small></td>
                 </tr>
               <tr>
                 <td valign="Middle" colspan="2" nowrap="true"><small>  
             </small>                                            
            <ul>
                   <small>                 </small>                     
                           
              <li><small><a href="/download/fb_ss-linux-i386-Snapshot-0.9.5.154.tar.gz">
      fb_ss-linux-i386-Snapshot-0.9.5.154.tar.gz</a>
                     </small><small>                   </small><small><br>
                     </small><small>                 </small></li>
                   <small>               </small>                       
                   
            </ul>
                 <small>               </small></td>
                 <td valign="Middle"><small>Super server packages for i386
 linux  machines. &nbsp;.tar.gz install packages as described for classic.</small><small><br>
                 </small><small>               </small></td>
                 </tr>
                                   
        </tbody>                
      </table>
           <small>         </small><small><br>
           </small><small>         </small></td>
           </tr>
         <tr>
           <td valign="Top" bgcolor="#e0e0e0"><small>         </small>  
      <small>           </small><small>             </small><small>     
         </small><small>                </small><small>             </small><small>
              </small><small>                </small><small>            
  </small><small>                     </small><small>             </small><small>
                </small><small>                </small><small>          
  </small><small>           </small>            <small>         </small>
                        
      <table cellpadding="2" cellspacing="2" border="0" width="100%">
             <tbody>
               <tr>
                 <td valign="Top" colspan="2"> Sun Solaris</td>
                 <td valign="Top"><small><br>
                 </small><small>               </small></td>
                 </tr>
               <tr>
                 <td valign="Top" colspan="2" nowrap="true"><small>     
          </small>                                            
            <ul>
                   <small>                 </small>                     
                           
              <li><small><a href="/download/snapshot_builds/solaris-sparc/FirebirdCS-0.9.5.226-Beta1.Solaris-Sparc.tar.gz">
      FirebirdCS-0.9.5.226-Beta1.Solaris-Sparc.tar.gz</a>
                     </small><small>                 </small></li>
                   <small>               </small>                       
                   
            </ul>
                 <small>               </small></td>
                 <td valign="Top"><small>Classic server packages for Solaris
                      </small><small><br>
                 </small><small>               </small></td>
                 </tr>
               <tr>
                 <td valign="Top" colspan="2"><small>                </small>
                                             
            <ul>
                   <small>                 </small>                     
                           
              <li><small><a href="/download/snapshot_builds/solaris-sparc/FirebirdSS-0.9.5.226-Beta1.Solaris-Sparc.tar.gz">
      FirebirdSS-0.9.5.226-Beta1.Solaris-Sparc.tar.gz</a>
                     </small><small>                   </small><small><br>
                     </small><small>                 </small></li>
                   <small>               </small>                       
                   
            </ul>
                 <small>               </small></td>
                 <td valign="Top"><small>Super server packages for Solaris
               </small><small><br>
                 </small><small>               </small></td>
                 </tr>
                                   
        </tbody>                
      </table>
           <small>         </small><small><br>
           </small><small>         </small></td>
           </tr>
                 
  </tbody>    
</table>
             
<p><br>
      </p>
           <br>

<?php
}


function PrettySize($size) {
    $mb = 1024*1024;
    if ( $size > $mb ) {
        $mysize = sprintf ("%01.2f",$size/$mb) . " MB";
    }
    elseif ( $size >= 1024 ) {
        $mysize = sprintf ("%01.2f",$size/1024) . " Kb";
    }
    else {
        $mysize = $size . " bytes";
    }
    return $mysize;
}



function main() {
  global $PHP_SELF, $query, $min, $sortbyname, $dcategory, $sortby, $bgcolor1, $bgcolor2, $bgcolor3, $textcolor1, $textcolor2, $sortorder, $sitename;
  include("header.php");
  callscript();
#  OpenTable3();
  preface();
#  emit_sections();
#  CloseTable();
  include("footer.php");
}

 main();


?>
