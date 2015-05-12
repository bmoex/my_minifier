.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt
.. index:: TypoScript Reference

TypoScript Reference
--------------------

All configuration of the minifier can be done via the constant editor (“PLUGIN.MYMINIFIER”)
Certainly you also can set the configuration directly via TypoScript setup/constants.

Here is a reference that is for TypoScript constants, easily configured in the Constant Editor:

+-----------------------------------+-------------+------------------------------------------------------------------+--------------------+
| Property                          | Data type   | Description                                                      | Default            |
+===================================+=============+==================================================================+====================+
| my_minifier.minimizeJs            | boolean     | Is the javascript minimization enabled for the page generation   | 1                  |
+-----------------------------------+-------------+------------------------------------------------------------------+--------------------+
| my_minifier.minimizeCss           | boolean     | Is the css minimization enabled for the page generation          | 1                  |
+-----------------------------------+-------------+------------------------------------------------------------------+--------------------+