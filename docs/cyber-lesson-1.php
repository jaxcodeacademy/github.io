<? 
session_start();
$breadcrumb = '<a href="syllabus.php">Syllabus</a>';
$bodycolor = "body-blue";
include 'header.php'; 
?>

<div class="container"><div class="row"><div class="col-md-12" style="font-size:18px;">

<h1>Hacking Lab</h1>

<p>Hypervisor: A hypervisor, also known as a virtual machine monitor or VMM, is software that creates and runs virtual machines (VMs). A hypervisor allows one host computer to support multiple guest VMs by virtually sharing its resources, such as memory and processing. Examples are Virtualbox, VMware, and Parallels.</p>

<strong>1. Install VMWare</strong></p>
<ul>
<li>
<strong>VMware for Windows:</strong> <a href="https://www.vmware.com/products/workstation-player.html" target="_blank" class="btn btn-xs btn-success btnstyle0" style="color:#ffffff;">Create Account and Download</a><br>
VMware is a virtualization and cloud computing software provider based in Palo Alto, Calif. Founded in 1998, VMware is a subsidiary of Dell Technologies. With VMware server virtualization, a hypervisor is installed on the physical server to allow for multiple virtual machines (VMs) to run on the same physical server.
<br><br>
</li>

<li>
<strong>VMware Fusion for Mac:</strong> <a href="https://www.vmware.com/products/fusion.html" target="_blank" class="btn btn-xs btn-success btnstyle0" style="color:#ffffff;">Create Account and Download</a> 
<br>
VMware Fusion is a software hypervisor developed by VMware for Macintosh computers. VMware Fusion allows Intel-based Macs to run virtual machines with guest operating systems-such as Microsoft Windows, Linux, NetWare, Solaris, or macOS-within the host macOS operating system.
<br><br>
</li>

<li>
<strong>Parallels for Apple M1 Chip:</strong> <a href="https://www.parallels.com/products/desktop/trial/" target="_blank" class="btn btn-xs btn-success btnstyle0" style="color:#ffffff;">Download</a><br>
Mac M1 Chip will not run VMware. You must download Parallels.<br><br>
</li>
</ul>



<p><strong>2. Install Kali Linux</strong> <a href="https://www.kali.org" target="_blank" class="btn btn-xs btn-success btnstyle0" style="color:#ffffff;">Get Kali</a></p>
	
<p>
Kali Linux is a version of Linux that was made for hackers. It comes with a lot of pre-installed hacking tools. You will use Kali Linux as your hacking machine. Install it as a Virtual Machine on VMware. 
</p>


<p>
<!--Kali Linux has some bugs and lacks some hacking tools. So, we are going to download the enhanced version of Kali Linux created by Zaid Sabih: <br>
<ul>
	<li>
	<a href="https://ln2.sync.com/dl/4d0b9c4d0/6sr37wua-ahnsianv-tkvq8arv-epibdiq9/view/default/9581806230004" target="_blank">Kali Linux 64 bit version</a><br></li>
	<li>
	<a href="https://ln2.sync.com/dl/0ca6ba260/vfebipps-5g755rb3-i6q77fbm-28vcysiy/view/default/9174974960004" target="_blank">Kali Linux 32 bit version</a><br></li>
</ul>
-->
</p>




<p>
Before starting Kali modify these settings by clicking on Kali Linux and then the Settings tab. All are optional except for the NAT Network:
</p>


<ul>
	<li>Click on System. </li>
	<li>Change base memory to 2 GB (2048 MB)</li>
	<li>Click on Processors and change CPUs to at least 2 CPUs.</li>
	<li>Go to Display and set scale factor to 200%.</li>
	<li>Next go to Network settings and set Kali to use a NAT Network in the dropdown. If NAT Network is missing then follow these steps to fix it:
	<ul>
	<li>Get out of Kali Linux settings</li>
	<li>Go to VirtualBox Preferences</li>
	<li>Go to Network and click the + sign.</li>
	<li>This will create a network 'NatNetwork'</li>
	<li>Now go back to Kali Linux Settings-->Network and you can select the new network.</li>
	
	</ul></li>
	<li>Click Ok to update settings.</li>
	<li>Start Kali Linux. The username is root and the password is toor (root backwards).</li>
</ul>



<br>
<p class="well">
Am I running a 64-bit or 32-bit machine?
<br><br>
Windows: <a href="https://www.computerhope.com/issues/ch001121.htm" target="_blank">https://www.computerhope.com/issues/ch001121.htm</a>
<br><br>
Mac:
<a href="https://www.macobserver.com/tips/how-to/mac-32-bit-64-bit/" target="_blank">https://www.macobserver.com/tips/how-to/mac-32-bit-64-bit/</a>
</p>
</div>   </div> </div>    









<!-- Main Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                     <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html> 