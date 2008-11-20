@echo off

REM set dbloc=net://trelenggtk.ottawa.ibm.com

java -Declipse.perf.dbloc=%dbloc% -jar ..\..\..\eclipse\plugins\org.eclipse.equinox.launcher_1.0.100.v20080509-1800.jar -application org.eclipse.test.performance.ui.resultGenerator %*

