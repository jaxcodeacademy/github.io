<? 
session_start();
$breadcrumb = 'Syllabus';
$bodycolor = "body-blue";
include 'header.php'; 
?>

<div class="container"><div class="row"><div class="col-md-12" style="font-size:18px;">

<h1>Project: Cybersecurity Terms Quiz</h1>

In this exercise you will build an online quiz that tests and grades a users knowledge of 25 Cyber Security Terms.
<br><br>
You will use html, php, mysql to build your online app.
<br><br>
It will have these features:
<br><br>
<ul>
	<li>A database with terms and definitions</li>

	<li>A web-based quiz that
		<ul>
	<li>Displays a term with 3 choices (the correct answer and two random answers)</li>
	<li>		Allows user to choose only one answer</li>
	<li>		Keeps track of right and wrong answers</li>
	<li>		Takes user through all 26 terms</li>
	<li>		Displays results after completing quiz</li>
</ul>

	</li>
	
	<li>You must take your own quiz until you score 100%</li>
</ul>

<br><br>
<strong>Goals of this Project</strong>:

<ul>
	<li>Learn basic programming skills</li>
	<li>Learn database development</li>
	<li>Learn webpage development</li>
	<li>Learn Cyber Terms</li>
</ul>

<br><br>
Pull 2 random answers from the database: <code>SELECT definition FROM cyberterms order by rand() limit 2</code>

<h3>Project 1: Cyber Terms</h3>
<textarea>
CREATE TABLE `cyberterms` (
  `term_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `term` varchar(100) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</textarea>

<br>

Terms and Definitions for database - 26 SQL Insert Statements
<br><br>
<code>
INSERT INTO cyberterms (term, definition) values("Cloud","A technology that allows us to access our files and/or services through the internet from anywhere in the world. Technically speaking, it's a collection of computers with large storage capabilities that remotely serve requests.");<br>

INSERT INTO cyberterms (term, definition) values("Software","A set of programs that tell a computer to perform a task. These instructions are compiled into a package that users can install and use. For example, Microsoft Office is an application software.");<br>


INSERT INTO cyberterms (term, definition) values("Domain","A group of computers, printers and devices that are interconnected and governed as a whole. For example, your computer is usually part of a domain at your workplace.");<br>


INSERT INTO cyberterms (term, definition) values("Virtual Private Network (VPN)","A tool that allows the user to remain anonymous while using the internet by masking the location and encrypting traffic.");<br>


INSERT INTO cyberterms (term, definition) values("IP Address","An internet version of a home address for your computer, which is identified when it communicates over a network; For example, connecting to the internet (a network of networks).");<br>


INSERT INTO cyberterms (term, definition) values("Exploit","A malicious application or script that can be used to take advantage of a computer's vulnerability.");<br>


INSERT INTO cyberterms (term, definition) values("Breach","The moment a hacker successfully exploits a vulnerability in a computer or device, and gains access to its files and network.");<br>


INSERT INTO cyberterms (term, definition) values("Firewall","A defensive technology designed to keep the bad guys out. Firewalls can be hardware or software-based.");<br>


INSERT INTO cyberterms (term, definition) values("Malware &#8220;the bad guy&#8221;","An umbrella term that describes all forms of malicious software designed to wreak havoc on a computer. Common forms include: viruses, trojans, worms and ransomware.");<br>

INSERT INTO cyberterms (term, definition) values("Virus","A type of malware aimed to corrupt, erase or modify information on a computer before spreading to others. However, in more recent years, viruses like Stuxnet have caused physical damage.");<br>

INSERT INTO cyberterms (term, definition) values("Ransomware","A form of malware that deliberately prevents you from accessing files on your computer &mdash; holding your data hostage. It will typically encrypt files and request that a ransom be paid in order to have them decrypted or recovered. For example, WannaCry Ransomware. For more information on Ransomware, check out our free Ransomware Guide.");<br>

INSERT INTO cyberterms (term, definition) values("Trojan horse","A piece of malware that often allows a hacker to gain remote access to a computer through a &#8220;back door&#8221;.");<br>

INSERT INTO cyberterms (term, definition) values("Worm","A piece of malware that can replicate itself in order to spread the infection to other connected computers.");<br>

INSERT INTO cyberterms (term, definition) values("Bot/Botnet","A type of software application or script that performs tasks on command, allowing an attacker to take complete control remotely of an affected computer. A collection of these infected computers is known as a &#8220;botnet&#8221; and is controlled by the hacker or &#8220;bot-herder&#8221;.");<br>


INSERT INTO cyberterms (term, definition) values("Spyware","A type of malware that functions by spying on user activity without their knowledge. The capabilities include activity monitoring, collecting keystrokes, data harvesting (account information, logins, financial data), and more.");<br>

INSERT INTO cyberterms (term, definition) values("Rootkit","Another kind of malware that allows cybercriminals to remotely control your computer. Rootkits are especially damaging because they are hard to detect, making it likely that this type of malware could live on your computer for a long time.");<br>

INSERT INTO cyberterms (term, definition) values("DDoS","An acronym that stands for distributed denial of service &mdash; a form of cyber attack. This attack aims to make a service such as a website unusable by &#8220;flooding&#8221; it with malicious traffic or data from multiple sources (often botnets).");<br>

INSERT INTO cyberterms (term, definition) values("Phishing or Spear Phishing","A technique used by hackers to obtain sensitive information. For example, using hand-crafted email messages designed to trick people into divulging personal or confidential data such as passwords and bank account information.");<br>

INSERT INTO cyberterms (term, definition) values("Encryption","The process of encoding data to prevent theft by ensuring the data can only be accessed with a key.");<br>

INSERT INTO cyberterms (term, definition) values("BYOD (Bring Your Own Device)","Refers to a company security policy that allows for employees' personal devices to be used in business. A BYOD policy sets limitations and restrictions on whether or not a personal phone or laptop can be connected over the corporate network.");<br>

INSERT INTO cyberterms (term, definition) values("Pen-testing","Short for &#8220;penetration testing,&#8221; this practice is a means of evaluating security using hacker tools and techniques with the aim of discovering vulnerabilities and evaluating security flaws.");<br>

INSERT INTO cyberterms (term, definition) values("Social Engineering","A technique used to manipulate and deceive people to gain sensitive and private information. Scams based on social engineering are built around how people think and act. So, once a hacker understands what motivates a person's actions, they can usually retrieve exactly what they're looking for &mdash; like financial data and passwords.");<br>


INSERT INTO cyberterms (term, definition) values("Clickjacking","A hacking attack that tricks victims into clicking on an unintended link or button, usually disguised as a harmless element.");<br>


INSERT INTO cyberterms (term, definition) values("Deepfake","An audio or video clip that has been edited and manipulated to seem real or believable. The most dangerous consequence of the popularity of deepfakes is that they can easily convince people into believing a certain story or theory that may result in user-behavior with a bigger impact as in political or financial.");<br>


INSERT INTO cyberterms (term, definition) values("White hat","Breaches the network to gain sensitive information with the owner's consent &mdash; making it completely legal. This method is usually employed to test infrastructure vulnerabilities.");<br>

INSERT INTO cyberterms (term, definition) values("Black hat","Hackers that break into the network to steal information that will be used to harm the owner or the users without consent. It's entirely illegal.");</code><br>
<br>



<br>
<h3>Project 2: Linux Commands</h3>
<code>
INSERT INTO linuxterms (term,definition) values("adduser","Add a new user");
INSERT INTO linuxterms (term,definition) values("arch","Print machine architecture");
INSERT INTO linuxterms (term,definition) values("awk","Find and Replace text within file(s)");
INSERT INTO linuxterms (term,definition) values("bc","An arbitrary precision calculator language");
INSERT INTO linuxterms (term,definition) values("cal","Display a calendar");
INSERT INTO linuxterms (term,definition) values("cat","Concatenate files and print on the standard output");
INSERT INTO linuxterms (term,definition) values("chdir","Change working directory");
INSERT INTO linuxterms (term,definition) values("chgrp","Change the group ownership of files");
INSERT INTO linuxterms (term,definition) values("chkconfig","Tool for maintaining the /etc/rc[0-6].d directory hierarchy");
INSERT INTO linuxterms (term,definition) values("chmod","Change the access permissions of files and directories");
INSERT INTO linuxterms (term,definition) values("chown","Change the user and group ownership of files");
INSERT INTO linuxterms (term,definition) values("chroot","Change root directory");
INSERT INTO linuxterms (term,definition) values("cksum","Print CRC checksum and byte counts");
INSERT INTO linuxterms (term,definition) values("clear","Clear terminal screen");
INSERT INTO linuxterms (term,definition) values("cmp","Compare two files");
INSERT INTO linuxterms (term,definition) values("comm","Compare two sorted files line by line");
INSERT INTO linuxterms (term,definition) values("cp","Copy one or more files to another location");
INSERT INTO linuxterms (term,definition) values("cron","Daemon to execute scheduled commands");
INSERT INTO linuxterms (term,definition) values("crontab","Schedule a command to run at a later time");
INSERT INTO linuxterms (term,definition) values("csplit","Split a file into context-determined pieces");
INSERT INTO linuxterms (term,definition) values("cut","Divide a file into several parts");
INSERT INTO linuxterms (term,definition) values("date","Display or change the date & time");
INSERT INTO linuxterms (term,definition) values("dc","Desk Calculator");
INSERT INTO linuxterms (term,definition) values("dd","Data Dump - Convert and copy a file");
INSERT INTO linuxterms (term,definition) values("df","Display free disk space");
INSERT INTO linuxterms (term,definition) values("diff","Display the differences between two files");
INSERT INTO linuxterms (term,definition) values("diff3","Show differences among three files");
INSERT INTO linuxterms (term,definition) values("dir","Briefly list directory contents");
INSERT INTO linuxterms (term,definition) values("dircolors","Colour setup for `ls'");
INSERT INTO linuxterms (term,definition) values("dirname","Convert a full pathname to just a path");
INSERT INTO linuxterms (term,definition) values("du","Estimate file space usage");
INSERT INTO linuxterms (term,definition) values("echo","Display message on screen");
INSERT INTO linuxterms (term,definition) values("ed","A line-oriented text editor (edlin)");
INSERT INTO linuxterms (term,definition) values("egrep","Search file(s) for lines that match an extended expression");
INSERT INTO linuxterms (term,definition) values("eject","Eject CD-ROM");
INSERT INTO linuxterms (term,definition) values("env","Display, set, or remove environment variables");
INSERT INTO linuxterms (term,definition) values("expand","Convert tabs to spaces");
INSERT INTO linuxterms (term,definition) values("expr","Evaluate expressions");
INSERT INTO linuxterms (term,definition) values("factor","Print prime factors");
INSERT INTO linuxterms (term,definition) values("false","Do nothing, unsuccessfully");
INSERT INTO linuxterms (term,definition) values("fdformat","Low-level format a floppy disk");
INSERT INTO linuxterms (term,definition) values("fdisk","Partition table manipulator for Linux");
INSERT INTO linuxterms (term,definition) values("fgrep","Search file(s) for lines that match a fixed string");
INSERT INTO linuxterms (term,definition) values("find","Search for files that meet a desired criteria");
INSERT INTO linuxterms (term,definition) values("fmt","Reformat paragraph text");
INSERT INTO linuxterms (term,definition) values("fold","Wrap text to fit a specified width");
INSERT INTO linuxterms (term,definition) values("format","Format disks or tapes");
INSERT INTO linuxterms (term,definition) values("free","Display memory usage");
INSERT INTO linuxterms (term,definition) values("fsck","Filesystem consistency check and repair");
INSERT INTO linuxterms (term,definition) values("gawk","Find and Replace text within file(s)");
INSERT INTO linuxterms (term,definition) values("grep","Search file(s) for lines that match a given pattern");
INSERT INTO linuxterms (term,definition) values("groups","Print group names a user is in");
INSERT INTO linuxterms (term,definition) values("gzip","Compress or decompress named file(s)");
INSERT INTO linuxterms (term,definition) values("head","Output the first part of file(s)");
INSERT INTO linuxterms (term,definition) values("hostname","Print or set system name");
INSERT INTO linuxterms (term,definition) values("id","Print user and group id's");
INSERT INTO linuxterms (term,definition) values("info","Help info");
INSERT INTO linuxterms (term,definition) values("install","Copy files and set attributes");
INSERT INTO linuxterms (term,definition) values("join","Join lines on a common field");
INSERT INTO linuxterms (term,definition) values("kill","Stop a process from running");
INSERT INTO linuxterms (term,definition) values("less","Display output one screen at a time");
INSERT INTO linuxterms (term,definition) values("ln","Make links between files");
INSERT INTO linuxterms (term,definition) values("locate","Find files");
INSERT INTO linuxterms (term,definition) values("logname","Print current login name");
INSERT INTO linuxterms (term,definition) values("lpc","Line printer control program");
INSERT INTO linuxterms (term,definition) values("lpr","Off line print");
INSERT INTO linuxterms (term,definition) values("lprm","Remove jobs from the print queue");
INSERT INTO linuxterms (term,definition) values("ls","List information about file(s)");
INSERT INTO linuxterms (term,definition) values("man","Help manual");
INSERT INTO linuxterms (term,definition) values("mkdir","Create new folder(s)");
INSERT INTO linuxterms (term,definition) values("mkfifo","Make FIFOs (named pipes)");
INSERT INTO linuxterms (term,definition) values("mknod","Make block or character special files");
INSERT INTO linuxterms (term,definition) values("more","Display output one screen at a time");
INSERT INTO linuxterms (term,definition) values("mount","Mount a file system");
INSERT INTO linuxterms (term,definition) values("mv","Move or rename files or directories");
INSERT INTO linuxterms (term,definition) values("nice","Set the priority of a command or job");
INSERT INTO linuxterms (term,definition) values("nl","Number lines and write files");
INSERT INTO linuxterms (term,definition) values("nohup","Run a command immune to hangups");
INSERT INTO linuxterms (term,definition) values("passwd","Modify a user password");
INSERT INTO linuxterms (term,definition) values("paste","Merge lines of files");
INSERT INTO linuxterms (term,definition) values("pathchk","Check file name portability");
INSERT INTO linuxterms (term,definition) values("pr","Convert text files for printing");
INSERT INTO linuxterms (term,definition) values("printcap","Printer capability database");
INSERT INTO linuxterms (term,definition) values("printenv","Print environment variables");
INSERT INTO linuxterms (term,definition) values("printf","Format and print data");
INSERT INTO linuxterms (term,definition) values("ps","Process status");
INSERT INTO linuxterms (term,definition) values("pwd","Print Working Directory");
INSERT INTO linuxterms (term,definition) values("quota","Display disk usage and limits");
INSERT INTO linuxterms (term,definition) values("quotacheck","Scan a file system for disk usage");
INSERT INTO linuxterms (term,definition) values("quotactl","Set disk quotas");
INSERT INTO linuxterms (term,definition) values("ram","ram disk device");
INSERT INTO linuxterms (term,definition) values("rcp","Copy files between two machines");
INSERT INTO linuxterms (term,definition) values("rm","Remove files");
INSERT INTO linuxterms (term,definition) values("rmdir","Remove folder(s)");
INSERT INTO linuxterms (term,definition) values("rpm","Remote Package Manager");
INSERT INTO linuxterms (term,definition) values("rsync","Remote file copy (Synchronize file trees)");
INSERT INTO linuxterms (term,definition) values("screen","Terminal window manager");
INSERT INTO linuxterms (term,definition) values("sdiff","Merge two files interactively");
INSERT INTO linuxterms (term,definition) values("sed","Stream Editor");
INSERT INTO linuxterms (term,definition) values("select","Accept keyboard input");
INSERT INTO linuxterms (term,definition) values("seq","Print numeric sequences");
INSERT INTO linuxterms (term,definition) values("shutdown","Shutdown or restart linux");
INSERT INTO linuxterms (term,definition) values("sleep","Delay for a specified time");
INSERT INTO linuxterms (term,definition) values("sort","Sort text files");
INSERT INTO linuxterms (term,definition) values("split","Split a file into fixed-size pieces");
INSERT INTO linuxterms (term,definition) values("su","Substitute user identity");
INSERT INTO linuxterms (term,definition) values("sum","Print a checksum for a file");
INSERT INTO linuxterms (term,definition) values("symlink","Make a new name for a file");
INSERT INTO linuxterms (term,definition) values("sync","Synchronize data on disk with memory");
INSERT INTO linuxterms (term,definition) values("tac","Concatenate and write files in reverse");
INSERT INTO linuxterms (term,definition) values("tail","Output the last part of files");
INSERT INTO linuxterms (term,definition) values("tar","Tape Archiver");
INSERT INTO linuxterms (term,definition) values("tee","Redirect output to multiple files");
INSERT INTO linuxterms (term,definition) values("test","Evaluate a conditional expression");
INSERT INTO linuxterms (term,definition) values("time","Measure Program Resource Use");
INSERT INTO linuxterms (term,definition) values("touch","Change file timestamps");
INSERT INTO linuxterms (term,definition) values("top","List processes running on the system");
INSERT INTO linuxterms (term,definition) values("traceroute","Trace Route to Host");
INSERT INTO linuxterms (term,definition) values("tr","Translate, squeeze, and/or delete characters");
INSERT INTO linuxterms (term,definition) values("true","Do nothing, successfully");
INSERT INTO linuxterms (term,definition) values("tsort","Topological sort");
INSERT INTO linuxterms (term,definition) values("tty","Print filename of terminal on stdin");
INSERT INTO linuxterms (term,definition) values("umount","Unmount a device");
INSERT INTO linuxterms (term,definition) values("uname","Print system information");
INSERT INTO linuxterms (term,definition) values("unexpand","Convert spaces to tabs");
INSERT INTO linuxterms (term,definition) values("uniq","Uniquify files");
INSERT INTO linuxterms (term,definition) values("units","Convert units from one scale to another");
INSERT INTO linuxterms (term,definition) values("unshar","Unpack shell archive scripts");
INSERT INTO linuxterms (term,definition) values("useradd","Create new user account");
INSERT INTO linuxterms (term,definition) values("usermod","Modify user account");
INSERT INTO linuxterms (term,definition) values("users","List users currently logged in");
INSERT INTO linuxterms (term,definition) values("uuencode","Encode a binary file");
INSERT INTO linuxterms (term,definition) values("uudecode","Decode a file created by uuencode");
INSERT INTO linuxterms (term,definition) values("vdir","Verbosely list directory contents (`ls -l -b')");
INSERT INTO linuxterms (term,definition) values("watch","Execute/display a program periodically");
INSERT INTO linuxterms (term,definition) values("wc","Print byte, word, and line counts");
INSERT INTO linuxterms (term,definition) values("whereis","Report all known instances of a command");
INSERT INTO linuxterms (term,definition) values("which","Locate a program file in the user's path");
INSERT INTO linuxterms (term,definition) values("who","Print all usernames currently logged in");
INSERT INTO linuxterms (term,definition) values("whoami","Print the current user id and name (`id -un')");
INSERT INTO linuxterms (term,definition) values("xargs","Execute utility, passing constructed argument list(s)");
INSERT INTO linuxterms (term,definition) values("yes","Print a string until interrupted");

</code>

<br>
</div>   </div> </div>    









<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 