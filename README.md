# javascriptcourseproject
My project for a university course in JavaScripts August14-February15

Morrígan in js
=========

A project as part of a course on Blekinge Tekniska Högskola in Sweden. The project is a website of a new (and fictional) company, Morrígan, that offer free jquery plugins och scripts for smaller companies in need of guidence of how to make it big (or at least bigger) in the world of the interweb.

Setup
=========
Download here and simply make sure that: 
* all the paths stated match and are correct.
* all the file names match and are correct. 

Changes
---------
Make your own changes on the content and layout. If you are only interested in the plugins provided by Morrígan, make sure to read the further instructions below. 


Setting up our plugin and scripts: 
====================================

Lightbox plugin
------------------
1. Download the following file:
<a href="zips/lightboxjqueryplugin.zip"> Download the zip file </a>


2. The second Place the downloaded folder with the files in the same directory where your other files as config, indexes, your file on the home page, etc.

3. Change the path and file name where necessary. For example: if you are in your navigation menu links to a page called "collection" or "collection" and the like that will contain light box, you can change the name of the downloaded file named "lightboxplug" to "collection" or "collection" or anything else that fits your business better.

4. Make sure you have file footer. If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">sourcecode for the footer </a>.

5. Make sure you have the file header that contains the link to the page's default stylesheet (layout / appearance). If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">sourcecode for the header </a>.

6. Add Plug for your jquery-file in the template / footer.php, like this:
<pre>
& lt; script src = "dinsökvägirelationtillmallfooter / jquery.js" & gt; & lt; / script & gt;
& lt; script src = "dinmapp / lightbox.js" & gt; & lt; / script & gt;
</ pre>

7. Use the following sample code or similar in your index file to add your own pictures you have in your img folder: </ p>
<pre>
& lt; img class = 'thumbnail lightbox' src = 'img / 2.jpg' alt = '' width = "200px" / & gt;
</ pre>

8. Change layout / appearance of the light box in the file "style.less". Try it out carefully if you're unsure, take your time. Otherwise you may to keep the current styling if it fits with your website original theme. 

<hr>

Gallery Script
------------------
1. Download the following file:
<a href="zips/galleryjavascript.zip"> Download the zip file </a>

2. Place the downloaded folder with the files in the same directory where your other files as config, indexes, your file on the home page, etc. 

3. Change the path and file name where necessary. For example: if you are in your navigation menu links to a page called "collection" or "collection" and the like that will contain the image gallery, you can change the name of the downloaded file named "Gallery Script" to "collection" or "collection" or anything else that fits your business better.

4. Make sure you have file footer. If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">sourcecode for the footer </a>. 

5. Make sure you have the file header that contains the link to the page's default stylesheet (layout / appearance). If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">sourcecode for the header </a>.

<p> Since this is a script, you have where everything needed to get this to work. Just be sure to link to this page with your gallery on your other pages or for example in your navbar / navigation menu. </ P>
6. Modify the following sample code in the "Gallery Script" file and specify the folder to your pictures right path: 
<pre>
& lt; img SRC1 = '.. / img / 1.jpg' width = '400' height = '300' / & gt;
</ pre>

7. Change layout / appearance of the image gallery in the file "style.less". Try it out carefully if you're unsure, take your time. Otherwise you may keep the current styling if it fits with your website original theme.


Slideshow script
------------------
1. Download the following file: 
<a href="zips/slideshowjavascript.zip"> Download the zip file </a>

2.Place the downloaded folder with the files in the same directory where your other files as config, indexes, your file on the home page, etc. 

3. Change the path and file name where necessary. For example: if you are in your navigation menu links to a page called "collection" or "collection" and the like that will contain the slideshow to show off your pictures, you can change the name of the downloaded file called "slideshow script" to "collection "or" collection "or anything else that fits your business better.

4. Make sure you have file footer. If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/footer.php">sourcecode for the footer </a>. 

5. Make sure you have the file header that contains the link to the page's default stylesheet (layout / appearance). If not, you can look at how our looks like this: <ahref="http://www.student.bth.se/~matl14/javascript/kmom10/webroot/source.php?path=webroot/presentation/mall/header.php">sourcecode for the header </a>. 

Since this is a script so you have everything in the folder that you download needed to make it work. Just be sure to link to this page with your slideshow on your other pages or for example in your navbar / navigation menu so that customers / visitors easily find their way there!

6. Modify the following sample code in the "slideshow script" file and specify the folder to your pictures right path:
<pre>
& lt; img src = "img / slideshow / <? = $ src?> 'alt =' img '/ & gt;
</ pre>

7. Change layout / appearance of the image gallery in the file "style.less". Try it out carefully if you're unsure, take your time. Otherwise you may keep the current styling if it fits with your website original theme.

