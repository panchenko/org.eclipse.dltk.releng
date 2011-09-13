<html>
<head>

<?php
        $parts = explode("/", getcwd());
        $parts2 = explode("-", $parts[count($parts) - 1]);
        $buildName = $parts2[1];

        echo "<title>Compile Logs: Code Bundles for $buildName</title>";
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>
.bold, .bold TD, .bold TH, .bold TR
{
font-weight:bold;
}
.numeric, .numeric TD
{
text-align:right;
padding-right:2%;
}
.normaltable, .normaltable TD, .normaltable TH
{
font-family:Bitstream Vera Sans Mono, monospace;
font-size:0.9em;
color:Black;
background-color:White;
}
.errorltable, .errortable TD, .errortable TH
{
font-family:Bitstream Vera Sans Mono, monospace;
font-size:0.9em;
color:Black;
background-color:Red;
font-weight:bold;
}
.warningtable, .warningtable TD, .warningtable TH
{
font-family:Bitstream Vera Sans Mono, monospace;
font-size:0.9em;
color:Black;
background-color:khaki;
}
.extraWarningTable, .extraWarningTable TD, .extraWarningTable TH
{
font-family:Bitstream Vera Sans Mono, monospace;
font-size:0.9em;
color:Black;
background-color:Yellow;
}
</style>
</head>
<body>

<?php
        echo "<h1>Compile Logs: Code Bundles for $buildName</h1>";
?>


<table id=tabledata align = "center" width="75%" border="1">
  <tr>
    <td class="bold" align="center">Compile Logs</td>
    <td class="bold" align="center">Compile Errors</td>
    <td class="bold" align="center">Compiler Warnings</td>
    <td class="bold" align="center">Access Violations</td>
    <td class="bold" align="center">Access Warnings</td>
  </tr>

  <tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.console.ui_3.0.0.v20101212-1106/@dot.bin.html" type='text/plain' >org.eclipse.dltk.console.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console.ui_3.0.0.v20101212-1106/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console.ui_3.0.0.v20101212-1106/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console.ui_3.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console.ui_3.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.console_3.0.0.v20101211-0412/@dot.bin.html" type='text/plain' >org.eclipse.dltk.console</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console_3.0.0.v20101211-0412/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console_3.0.0.v20101211-0412/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console_3.0.0.v20101211-0412/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.console_3.0.0.v20101211-0412/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql.h2_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.core.index.sql.h2</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql.h2_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql.h2_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql.h2_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql.h2_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.core.index.sql</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.index.sql_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.core.manipulation_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.core.manipulation</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.manipulation_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.manipulation_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >20</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.manipulation_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core.manipulation_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.core_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >58</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >10</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.debug.ui_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.debug.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug.ui_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug.ui_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >15</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >196</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.debug_3.0.0.v20101211-0412/@dot.bin.html" type='text/plain' >org.eclipse.dltk.debug</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug_3.0.0.v20101211-0412/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug_3.0.0.v20101211-0412/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug_3.0.0.v20101211-0412/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.debug_3.0.0.v20101211-0412/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.formatter_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.formatter</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.formatter_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.formatter_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.formatter_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.formatter_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.itcl.core_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.itcl.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.core_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.core_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >6</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.itcl.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.itcl.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.itcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.dom.support_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.core.dom.support</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.dom.support_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.dom.support_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.dom.support_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.dom.support_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.manipulation_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.core.manipulation</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.manipulation_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.manipulation_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >16</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.manipulation_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core.manipulation_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >3</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.core_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >6</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.core_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug.ui_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.debug.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug.ui_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug.ui_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >3</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug.ui_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug.ui_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >85</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.debug</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.debug_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.formatter_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.formatter</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.formatter_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.formatter_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >3</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.formatter_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.formatter_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.jdt.integration_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.jdt.integration</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jdt.integration_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jdt.integration_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jdt.integration_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jdt.integration_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.jsjdtdebugger_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.jsjdtdebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jsjdtdebugger_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jsjdtdebugger_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jsjdtdebugger_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.jsjdtdebugger_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.launching_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.launching</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.launching_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.launching_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.launching_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.launching_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >2</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.parser_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.parser</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.parser_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.parser_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.parser_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.parser_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino.dbgp_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.rhino.dbgp</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino.dbgp_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino.dbgp_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >12</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino.dbgp_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino.dbgp_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino_3.0.0.v20110429/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.rhino</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino_3.0.0.v20110429/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino_3.0.0.v20110429/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >16</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.rhino_3.0.0.v20110429/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.javascript.ui_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.javascript.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.ui_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.ui_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >15</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.ui_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.javascript.ui_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.launching_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.launching</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.launching_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.launching_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >4</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.launching_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.launching_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.logconsole.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.logconsole.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.logconsole_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.logconsole</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.logconsole_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.mylyn_3.0.0.v20101211-0331/@dot.bin.html" type='text/plain' >org.eclipse.dltk.mylyn</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.mylyn_3.0.0.v20101211-0331/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.mylyn_3.0.0.v20101211-0331/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.mylyn_3.0.0.v20101211-0331/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.mylyn_3.0.0.v20101211-0331/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.activestatedebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.activestatedebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.activestatedebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.core_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.core_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.core_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >46</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.debug.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.debug.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.debug_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.debug</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.launching_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.launching</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.launching_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.launching_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >5</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.python.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.python.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.python.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.rse.core_2.0.0.v20101211-0331/@dot.bin.html" type='text/plain' >org.eclipse.dltk.rse.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.core_2.0.0.v20101211-0331/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.core_2.0.0.v20101211-0331/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.core_2.0.0.v20101211-0331/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.core_2.0.0.v20101211-0331/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.rse.ui_2.0.0.v20101212-1106/@dot.bin.html" type='text/plain' >org.eclipse.dltk.rse.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.ui_2.0.0.v20101212-1106/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.ui_2.0.0.v20101212-1106/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.ui_2.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.rse.ui_2.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.abstractdebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.abstractdebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.abstractdebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.abstractdebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.abstractdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.abstractdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.activestatedebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.activestatedebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.activestatedebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.basicdebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.basicdebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.basicdebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.basicdebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.basicdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.basicdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.core_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.core_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.core_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >8</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.core_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.core_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.debug.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >38</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.debug</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.fastdebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.fastdebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.fastdebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.fastdebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.fastdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.fastdebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.formatter_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.formatter</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.formatter_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.formatter_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.formatter_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.formatter_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.launching_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.launching</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.launching_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.launching_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.testing_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.testing</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.testing_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.testing_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >4</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.testing_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.testing_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ruby.ui_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ruby.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.ui_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.ui_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >5</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ruby.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ssh.core_1.0.0.v20101212-1106/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ssh.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ssh.core_1.0.0.v20101212-1106/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ssh.core_1.0.0.v20101212-1106/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ssh.core_1.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ssh.core_1.0.0.v20101212-1106/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.activestatedebugger_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.activestatedebugger</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.activestatedebugger_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.activestatedebugger_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.core_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.core_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.core_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >15</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.debug.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >3</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >3</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.debug</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.debug_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.formatter_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.formatter</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.formatter_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.formatter_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.formatter_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.formatter_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.launching_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.launching</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.launching_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.launching_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.launching_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.parser_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.parser</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.parser_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.parser_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.parser_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.parser_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.tclchecker_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.tclchecker</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.tclchecker_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.tclchecker_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.tclchecker_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.tclchecker_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing.tcltest_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.testing.tcltest</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing.tcltest_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing.tcltest_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing.tcltest_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing.tcltest_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.testing</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >5</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.testing_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >4</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.tcl.validators_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.tcl.validators</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.validators_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.validators_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >1</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.validators_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.tcl.validators_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.testing_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.testing</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.testing_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.testing_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >11</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.testing_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.testing_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.ui_3.0.0.v20110609-1525/@dot.bin.html" type='text/plain' >org.eclipse.dltk.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ui_3.0.0.v20110609-1525/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ui_3.0.0.v20110609-1525/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >72</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ui_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.ui_3.0.0.v20110609-1525/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >44</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.validators.core_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.validators.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.core_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.core_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >3</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.core_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.core_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.validators.externalchecker_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.validators.externalchecker</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.externalchecker_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.externalchecker_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.externalchecker_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.externalchecker_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="normaltable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.validators.ui_3.0.0.v20110423/@dot.bin.html" type='text/plain' >org.eclipse.dltk.validators.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.ui_3.0.0.v20110423/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.ui_3.0.0.v20110423/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >0</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.validators.ui_3.0.0.v20110423/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.xotcl.core_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.xotcl.core</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.core_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.core_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >6</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.core_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.xotcl.testing.xounit_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.xotcl.testing.xounit</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.testing.xounit_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.testing.xounit_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >6</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.testing.xounit_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.testing.xounit_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="warningtable">
<td>
<a href="compilelogs/plugins/org.eclipse.dltk.xotcl.ui_3.0.0.v20110424/@dot.bin.html" type='text/plain' >org.eclipse.dltk.xotcl.ui</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.ui_3.0.0.v20110424/@dot.bin.html#ERRORS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.ui_3.0.0.v20110424/@dot.bin.html#OTHER_WARNINGS" type='text/plain' >2</a></td><td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>
<td CLASS="numeric"><a href="compilelogs/plugins/org.eclipse.dltk.xotcl.ui_3.0.0.v20110424/@dot.bin.html#ACCESSRULES_WARNINGS" type='text/plain' >0</a></td>

</tr>
<tr CLASS="extraWarningTable bold">
<td>TOTALS  (68)</td><td CLASS="numeric">0</td><td CLASS="numeric">395</td><td CLASS="numeric">0</td><td CLASS="numeric">381</td>
</tr>


</table>

</body>
</html>
