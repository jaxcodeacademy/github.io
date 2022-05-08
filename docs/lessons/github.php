<section id="jaxcode" class="doc-section">
<h2 class="section-title">Github</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
Go to windows.github.com or mac.github.com and open a free account.

<h2>Create a New Repository</h2>
From Github dashboard create a new repository with these settings:
<ol>
	<li>Enter repository name</li>
	<li>Select public</li>
	<li>Check Initialize with a README</li>
	<li>Click Create</li>
</ol>


<h2>Git Commands</h2>

<ol>
	<li>git clone git@github.com:jaxcodeacademy/test1.git <-- Makes a copy of the code on your computer or webfaction</li>
	<li>git status <-- checks for updated files. Red=updated, green=means ready to commit</li>
	<li>git add -A <-- queues the files for upload</li>
	<li>git status</li>
	<li>git commit -m "Updated" <-- finalises the upload</li>
	<li>git push <-- puts the files up on Github</li>
</ol>
<a href="https://education.github.com/git-cheat-sheet-education.pdf" target="_blank">Github Cheat Sheet</a>


<br><br>
if you get this error when you try to clone:<br>
<code>
git clone git@github.com:jaxcodeacademy/test1.git<br>
Cloning into 'test1'...<br>
<span style="background-color:yellow;color:#000000;">Permission denied (publickey)</span>.<br>
fatal: Could not read from remote repository.
<br><br>
Please make sure you have the correct access rights<br>
and the repository exists.<br>


</code>
<br><br>
Here is the fix:

<ol>
	<li>Open git bash (Use the Windows search. To find it, type "git bash") or the Mac Terminal. </li>
	<li>Type `cd ~/.ssh`. This will take you to the root directory for Git (Likely `C:\Users\[YOUR-USER-NAME]\.ssh\` on Windows)</li>
	<li>Within the `.ssh` folder, there should be these two files: `id_rsa` and `id_rsa.pub`. These are the files that tell your computer how to communicate with GitHub, BitBucket, or any other Git based service. Type `ls` to see a directory listing. If those two files don't show up, proceed to the next step. __NOTE:__ Your SSH keys must be named `id_rsa` and `id_rsa.pub` in order for Git, GitHub, and BitBucket to recognize them by default.</li>
	<li>To create the SSH keys, type `ssh-keygen -t rsa -C "your_email@example.com"`. This will create both `id_rsa` and `id_rsa.pub` files.</li>
	<li>Now, go and open `id_rsa.pub` in your favorite text editor (you can do this via Windows Explorer or the OSX Finder if you like, typing `open .` will open the folder).</li>
	<li>Copy the contents--exactly as it appears, with no extra spaces or lines--of `id_rsa.pub` and paste it into GitHub and/or BitBucket under the Account Settings > SSH Keys. __NOTE:__ I like to give the SSH key a descriptive name, usually with the name of the workstation I'm on along with the date.</li>
	<li>Now that you've added your public key to Github and/or BitBucket, try to `git push` again and see if it works. It should!</li>
</ol>


<br><br>
On Mac - if you get this error when you try to clone:<br>
<code>
<span style="background-color:yellow;color:#000000;">xcrun: error: invalid active developer path</span> (/Library/Developer/CommandLineTools), missing><br>xcrun at: /Library/Developer/CommandLineTools/usr/bin/xcrun
</code>
<br><br>
Open Terminal, and run the following:
<br><br>
<code>xcode-select --install</code><br>
This will download and install the Command Line Tools package and fix the problem.<br>

You do not need Xcode, you can install only the Command Line Tools here, it is about 130Mb.<br><br>

If the above alone doesn't do it, then also run:<br><br>

<code>xcode-select --reset</code>
<br><br>


</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
<li><a href="https://github.com/" target="_blank">Put all of your Assignments on Github</a></li>
</ol>
</div>
</div>
</section><!--//doc-section-->


