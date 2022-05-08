<section id="helloworld" class="doc-section">
<h2>How to Dump your Database</h2>
<p>A database dump contains a record of the table structure and/or the data from a database and is usually in the form of a list of SQL statements. A database dump is most often used for backing up a database so that its contents can be restored in the event of data loss. -- Wikipedia</p>
<code>mysqldump -u [uname] -p db_name > db_backup.sql</code>

<br><br>To restore the DB dump:<br>
<code>mysql -u [uname] -p db_name < db_backup.sql</code>

<br><br>
<h2 class="section-title">Crontab</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p>The cron daemon is a long-running process
      that executes commands at specific dates and times. You can use this
      to schedule activities, either as one-time events or as recurring
      tasks.</p>

    <p>To schedule one-time only tasks with cron, use the
      <code>at</code> or <code>batch</code> command. 
    </p>

    <p>For commands that need to be executed repeatedly (e.g., hourly, daily,
      or weekly), you can use the <code>crontab</code> command. The
      <code>crontab</code> command creates a crontab file containing commands
      and instructions for the cron daemon to execute. You
      can use the <code>crontab</code> command with the following options:</p>
    <div class="table-responsive"><table class="table" title="The first column names the crontab options. The second column describes what each option does.">
      <col style="width:27%"/>
      <col style="width:72%"/>
      
    <tbody><tr>
        <td><code>crontab -a filename</code> </td>
        <td><div class="wrap">Install
          <code>filename</code> as your crontab file. On many systems,
          this command is executed simply as <code>crontab filename</code>          
          (i.e., without the <code>-a</code> option).
        </div></td>
      </tr><tr>
        <td><code>crontab -e</code> </td>
        <td><div class="wrap">Edit your crontab file, or create one if it doesn't already exist.
        </div></td>
      </tr><tr>
        <td><code>crontab -l</code> </td>
        <td>Display your crontab file.
        </td>
      </tr><tr>
        <td><code>crontab -r</code> </td>
        <td>Remove your crontab file.
        </td>
      </tr><tr>
        <td><code>crontab -v</code> </td>
        <td><div class="wrap">Display the last time you edited your crontab file. (This option
          is available on only a few systems.)
        </div></td>
      </tr><tr>
        <td><code>crontab -u user</code> </td>
        <td><div class="wrap">Used in conjunction with other options, this option allows you
          to modify or view the crontab file of
          <code>user</code>. When available, only administrators can use
          this option.
        </div></td>
      </tr></tbody></table></div>


    <p>Each entry in a crontab file consists of six fields, specifying in
      the following order:</p>
    <pre class="example">  minute(s) hour(s) day(s) month(s) weekday(s) command(s)</pre>

    <p>The fields are separated by spaces or tabs. The first five are integer
      patterns and the sixth is the command to execute. The following table
      briefly describes each of the fields:</p>
    <div class="table-responsive"><table class="table">
      <col style="width:12%"/>
      <col style="width:12%"/>
      <col style="width:75%"/>
      
      
      
      
      
      
      
    <thead><tr>
        <th>Field </th>
        <th>Value </th>
        <th>Description
        </th>
      </tr></thead><tbody><tr>
        <td>minute </td>
        <td>0-59 </td>
        <td><div class="wrap">The exact minute that the command sequence executes
        </div></td>
      </tr><tr>
        <td>hour </td>
        <td>0-23 </td>
        <td><div class="wrap">The hour of the day that the command sequence executes
        </div></td>
      </tr><tr>
        <td>day </td>
        <td>1-31 </td>
        <td><div class="wrap">The day of the month that the command sequence executes
        </div></td>
      </tr><tr>
        <td>month </td>
        <td>1-12 </td>
        <td><div class="wrap">The month of the year that the command sequence executes
        </div></td>
      </tr><tr>
        <td>weekday </td>
        <td>0-6 </td>
        <td><div class="wrap">The day of the week that the command sequence executes (Sunday
          = 0, Monday = 1, Tuesday = 2, and so forth)
        </div></td>
      </tr><tr>
        <td>command </td>
        <td>Special </td>
        <td><div class="wrap">The complete sequence of commands to execute. The command string
          must conform to Bourne shell syntax. Commands,
          executables (such as scripts), or combinations are acceptable.
        </div></td>
      </tr></tbody></table></div>
    
    <p>Each of the patterns from the first five fields may be either
      <code>*</code> (an asterisk), meaning all legal values, or a list
      of elements separated by commas. An element is either a number or
      an inclusive range, indicated by two numbers separated by a minus
      sign (e.g., <code>10-12</code>). You can specify days with two fields:
      day of the month and day of the week. If you specify both of them
      as a list of elements, cron will observe both of them,
      for example:
    </p>
    <pre class="example">  0 0 1,15 * 1 /mydir/myprogram</pre>

    <p>The cron daemon would run the program
      <code>myprogram</code> in the <code>mydir</code> directory on the
      first and fifteenth of each month, as well as on every Monday. To
      specify days by only one field, the other field should be set to
      <code>*</code>, for example:</p>
    <pre class="example">  0 0 * * 1 /mydir/myprogram</pre>

    <p>In the above example, the program would run only on Mondays.</p>

    <p>If a cron job specified in your crontab entry produces any error messages
      when it runs, you will get a mail message reporting the errors.
    </p>

    <p>For more, consult the following relevant man pages:
    </p>
    <pre class="example">  man crontab
  man cron
  man at
  man batch</pre>

    <div>
</div><!--//code-block-->

<h2>Why Use Cron Jobs?</h2>
Server admins have been using cron jobs for a long time. But since the target audience of this article is web developers, let's look at a few use cases of cron jobs that are relevant in this area:

<ul>
	<li>If you have a membership site, where accounts have expiration dates, you can schedule cron jobs to regularly deactivate or delete accounts that are past their expiration dates.</li>
	<li>You can send out daily newsletter e-mails.</li>
	<li>If you have summary tables (or materialized views) in your database, they can be regularly updated with a cron job. For example you may store every web page hit in a table, but another summary table may contain daily traffic summaries.</li>
	<li>You can expire and erase cached data files in a certain interval.</li>
	<li>You can auto-check your website content for broken links and have a report e-mailed to yourself regularly.</li>
	<li>You can schedule long-running tasks to run from a command line script, rather than running it from a web script. Like encoding videos, or sending out mass e-mails.</li>
	<li>You can even perform something as simple as fetching your most recent Tweets, to be cached in a text file.</li>
</ul>











</div>
</div>
</section><!--//doc-section-->


<section id="assignments" class="doc-section">
<h2 class="section-title">Assignments</h2>
<div class="section-block">                                    
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<ol>
	<li>Creat a cron job to automatically backup your database at night and another cron job that deletes backups older than 4 days. Instructions for setting this up can be found in Web Faction's <a href="https://docs.webfaction.com/user-guide/databases.html" target="_blank">Documentation: Backing Up a Database Automatically</a>.</li>
	<li>To delete backups older than 4 days enter the following into crontab:<br>
	0 7 * * * /usr/bin/find $HOME/db_backups/ -type f -mtime +4 -exec rm -rf {} \;</li>

</ol>
</div>
</div>
</section><!--//doc-section-->


