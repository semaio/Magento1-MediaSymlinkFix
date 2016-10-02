Semaio_MediaSymlinkFix
======================

Fixes a bug in the WYSIWYG editor in the Magento backend if the media directory is a symlink.

Facts
-----
* Version: 0.0.0

Functionality
-------------

If the **media** directory of a Magento instance is a symlink instead of a regulary directory, the directory tree in the image select/image uploader of the WYSIWYG editor in the Magento backend always repeats itself recursively instead of showing the correct directory tree and subdirectories.

Support
-------
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/semaio/Magento1-MediaSymlinkFix/issues).

Contribution
------------
Any contribution to the development of MageSetup is highly welcome. The best possibility to provide any code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Licence
-------
[Open Software License (OSL 3.0)](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2016 Rouven Alexander Rieker
