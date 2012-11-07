<?php
///==========================================================================================
/// NOTICE OF LICENSE & DISCLAIMER
///
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
///	We donot recomend to make any changes(customizations) to the PHP files, othrwise you are
///	not able to upagrde your modules.
///
/// If you do need to make changes to source code files, please consult us first.
/// http://addons-modules.com/en/contact-us
///
///	Vist our support forum if you require technical support
/// http://addons-modules.com/modules/agileforumphpbb/agileforum.php
///
/// @copyright  2009-2012 Addons-Modules.com
/// 
///==========================================================================================

global $cookie;    if(!$cookie->isLogged())Tools::redirect('./authentication.php');    $filename = ProductDownload::getFilenameFromIdProduct(Tools::getValue('id_product'));  if (!Validate::isSha1($filename))   die(Tools::displayError());  $file = _PS_DOWNLOAD_DIR_.strval(preg_replace('/\.{2,}/', '.',$filename));  $filename = ProductDownload::getFilenameFromFilename($filename);  if (empty($filename))  {   $newFileName = Tools::getValue('filename');   if (!empty($newFileName))    $filename = Tools::getValue('filename');   else    $filename = 'file';  }      $mime_type = false;  if (function_exists('finfo_open'))  {   $finfo = @finfo_open(FILEINFO_MIME);   $mime_type = @finfo_file($finfo, $file);   @finfo_close($finfo);  }  elseif (function_exists('mime_content_type'))   $mime_type = @mime_content_type($file);  elseif (function_exists('exec'))   $mime_type = trim(@exec('file -bi '.escapeshellarg($file)));    if (empty($mime_type))  {   $bName = basename($filename);   $bName = explode('.', $bName);   $bName = strtolower($bName[count($bName) - 1]);      $mimeTypes = array(   'ez' => 'application/andrew-inset',   'hqx' => 'application/mac-binhex40',   'cpt' => 'application/mac-compactpro',   'doc' => 'application/msword',   'bin' => 'application/octet-stream',   'dms' => 'application/octet-stream',   'lha' => 'application/octet-stream',   'lzh' => 'application/octet-stream',   'exe' => 'application/octet-stream',   'class' => 'application/octet-stream',   'so' => 'application/octet-stream',   'dll' => 'application/octet-stream',   'oda' => 'application/oda',   'pdf' => 'application/pdf',   'ai' => 'application/postscript',   'eps' => 'application/postscript',   'ps' => 'application/postscript',   'smi' => 'application/smil',   'smil' => 'application/smil',   'wbxml' => 'application/vnd.wap.wbxml',   'wmlc' => 'application/vnd.wap.wmlc',   'wmlsc' => 'application/vnd.wap.wmlscriptc',   'bcpio' => 'application/x-bcpio',   'vcd' => 'application/x-cdlink',   'pgn' => 'application/x-chess-pgn',   'cpio' => 'application/x-cpio',   'csh' => 'application/x-csh',   'dcr' => 'application/x-director',   'dir' => 'application/x-director',   'dxr' => 'application/x-director',   'dvi' => 'application/x-dvi',   'spl' => 'application/x-futuresplash',   'gtar' => 'application/x-gtar',   'hdf' => 'application/x-hdf',   'js' => 'application/x-javascript',   'skp' => 'application/x-koan',   'skd' => 'application/x-koan',   'skt' => 'application/x-koan',   'skm' => 'application/x-koan',   'latex' => 'application/x-latex',   'nc' => 'application/x-netcdf',   'cdf' => 'application/x-netcdf',   'sh' => 'application/x-sh',   'shar' => 'application/x-shar',   'swf' => 'application/x-shockwave-flash',   'sit' => 'application/x-stuffit',   'sv4cpio' => 'application/x-sv4cpio',   'sv4crc' => 'application/x-sv4crc',   'tar' => 'application/x-tar',   'tcl' => 'application/x-tcl',   'tex' => 'application/x-tex',   'texinfo' => 'application/x-texinfo',   'texi' => 'application/x-texinfo',   't' => 'application/x-troff',   'tr' => 'application/x-troff',   'roff' => 'application/x-troff',   'man' => 'application/x-troff-man',   'me' => 'application/x-troff-me',   'ms' => 'application/x-troff-ms',   'ustar' => 'application/x-ustar',   'src' => 'application/x-wais-source',   'xhtml' => 'application/xhtml+xml',   'xht' => 'application/xhtml+xml',   'zip' => 'application/zip',   'au' => 'audio/basic',   'snd' => 'audio/basic',   'mid' => 'audio/midi',   'midi' => 'audio/midi',   'kar' => 'audio/midi',   'mpga' => 'audio/mpeg',   'mp2' => 'audio/mpeg',   'mp3' => 'audio/mpeg',   'aif' => 'audio/x-aiff',   'aiff' => 'audio/x-aiff',   'aifc' => 'audio/x-aiff',   'm3u' => 'audio/x-mpegurl',   'ram' => 'audio/x-pn-realaudio',   'rm' => 'audio/x-pn-realaudio',   'rpm' => 'audio/x-pn-realaudio-plugin',   'ra' => 'audio/x-realaudio',   'wav' => 'audio/x-wav',   'pdb' => 'chemical/x-pdb',   'xyz' => 'chemical/x-xyz',   'bmp' => 'image/bmp',   'gif' => 'image/gif',   'ief' => 'image/ief',   'jpeg' => 'image/jpeg',   'jpg' => 'image/jpeg',   'jpe' => 'image/jpeg',   'png' => 'image/png',   'tiff' => 'image/tiff',   'tif' => 'image/tif',   'djvu' => 'image/vnd.djvu',   'djv' => 'image/vnd.djvu',   'wbmp' => 'image/vnd.wap.wbmp',   'ras' => 'image/x-cmu-raster',   'pnm' => 'image/x-portable-anymap',   'pbm' => 'image/x-portable-bitmap',   'pgm' => 'image/x-portable-graymap',   'ppm' => 'image/x-portable-pixmap',   'rgb' => 'image/x-rgb',   'xbm' => 'image/x-xbitmap',   'xpm' => 'image/x-xpixmap',   'xwd' => 'image/x-windowdump',   'igs' => 'model/iges',   'iges' => 'model/iges',   'msh' => 'model/mesh',   'mesh' => 'model/mesh',   'silo' => 'model/mesh',   'wrl' => 'model/vrml',   'vrml' => 'model/vrml',   'css' => 'text/css',   'html' => 'text/html',   'htm' => 'text/html',   'asc' => 'text/plain',   'txt' => 'text/plain',   'rtx' => 'text/richtext',   'rtf' => 'text/rtf',   'sgml' => 'text/sgml',   'sgm' => 'text/sgml',   'tsv' => 'text/tab-seperated-values',   'wml' => 'text/vnd.wap.wml',   'wmls' => 'text/vnd.wap.wmlscript',   'etx' => 'text/x-setext',   'xml' => 'text/xml',   'xsl' => 'text/xml',   'mpeg' => 'video/mpeg',   'mpg' => 'video/mpeg',   'mpe' => 'video/mpeg',   'qt' => 'video/quicktime',   'mov' => 'video/quicktime',   'mxu' => 'video/vnd.mpegurl',   'avi' => 'video/x-msvideo',   'movie' => 'video/x-sgi-movie',   'ice' => 'x-conference-xcooltalk');      if (isset($mimeTypes[$bName]))    $mime_type = $mimeTypes[$bName];   else    $mime_type = 'application/octet-stream';  }    header('Content-Transfer-Encoding: binary');  if ($mime_type)   header('Content-Type: '.$mime_type);  header('Content-Length: '.filesize($file));  header('Content-Disposition: attachment; filename="'.$filename.'"');  readfile($file);    exit;    ?>