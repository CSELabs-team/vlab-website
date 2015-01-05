	<?php
	  ini_set('display_errors',1);
	  include ('../interim/header.php');
	  ?>

	  <div class="row">
	 	
	    <div class="col-md-8 wiki" >
	    <h3 class='text-center'> VLab Wiki </h3>

	<div class="tabbable">
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
	    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
	    <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	    <div class="content pre-scrollable">	
	       <font style="font-weight: bold;" face="Arial, sans-serif"><font size="3">Setup
                        Overview</font></font>
                    <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">The&nbsp;</span></span></font></font></font></span><font
                        color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/overview.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">basic
                                        setup</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;of
                VITAL
                                  requires a dedicated, VLAN capable switch and two machines:
                                  the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/gateway.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Gateway</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;and
                                  the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Xen
                                        Node</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">.
                                  This is the recommended initial setup. A simpler&nbsp;</span></span></font></font></font></span><font
                        color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/overview.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">one
                                        machine</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;setup
                is
                                  possible with the gateway vitualized, but this configuration
                                  requires a more complex setup, and a careful review of the
                                  security
                                  ramifications, so not recommended for initial setup. As an
                                  example of
                                  how VITAL scales, the&nbsp;</span></span></font></font></font></span><font
                        color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/overview.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">NYU‑Poly</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;can
                be
                                  seen.</span></span></font></font></font></span></p>
                    <h3 class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                      align="LEFT">
                      <font style="font-weight: bold;" face="Arial, sans-serif"><font size="3">Administrative
                          Overview</font></font></h3>
                    <p class="western" align="LEFT"><em><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">Controller</span></span></font></font></font></span></em><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;<br>
                                  The&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/gateway.php#controller"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Controller</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;is
                an
                                  application which processes the VM requests and controls the
                                  creation and operation of the VMs. The script (</span></span></font></font></font></span><code><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">cntl_interim-new.php</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">)
                                  is located in the&nbsp;</span></span></font></font></font></span><code><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">/home/vlab_scp/cntl/interim/</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;directory
                and
                                  started in a&nbsp;</span></span></font></font></font></span><em><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">screen</span></span></font></font></font></span></em><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;session
                from
                                  the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">vlab-deploy/config/gateway/startup/startup-gateway.sh</span></span></font></font></font></span></em><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;file.
                Review
                                  online instruction on how to properly&nbsp;</span></span></font></font></font></span><font
                        color="#000080"><span
                          lang="zxx"><u><a
                              href="http://www.rackaid.com/resources/linux-screen-tutorial-and-how-to/"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">attach
                and
                                        detach</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;from
                the
                                  screen session without killing the controller.&nbsp;<br>
                                  <br>
                                </span></span></font></font></font></span><em><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">Log
                                    files</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;<br>
                                  Assuming
                                  a&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Basic
                                        Setup</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">,
                                  the following log files will be located in
                                  the&nbsp;</span></span></font></font></font></span><code><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">/home/vlab_scp/cntl/interim/</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;directory
                on
                                  the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/gateway.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Gateway
                                        Machine</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">:&nbsp;<br>
                                  <br>
                                </span></span></font></font></font></span><code><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">vlab_controller.log</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;<br>
                                </span></span></font></font></font></span><code><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">doAction_output.log</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;<br>
                                </span></span></font></font></font></span><code><span style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">log.txt</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;<br>
                                  <br>
                                  Additional
                                  log files can be also be found in the&nbsp;</span></span></font></font></font></span><code><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">/var/log/vlab</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;directory.
                Log
                                  files related to the Xen functions of the VMs are located in
                                  the&nbsp;</span></span></font></font></font></span><code><span
                          style="font-variant: normal"><font
                            color="#000000"><font
                              face="Arial, sans-serif"><font
                                size="3"><span
                                  style="font-style: normal"><span
                                    style="font-weight: normal">/var/log/xen</span></span></font></font></font></span></code><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">&nbsp;directory
                of
                                  the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                          lang="zxx"><u><a
                              href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                style="font-variant: normal"><font
                                  face="Arial, sans-serif"><font
                                    size="3"><span
                                      style="font-style: normal"><span
                                        style="font-weight: normal">Xen
                                        Node</span></span></font></font></span></a></u></span></font><span
                        style="font-variant: normal"><font
                          color="#000000"><font
                            face="Arial, sans-serif"><font
                              size="3"><span
                                style="font-style: normal"><span
                                  style="font-weight: normal">.</span></span></font></font></font></span></p>
    	</div>
	    </div>
	    <div class="tab-pane" id="tab2">
	    <div class="content pre-scrollable">	
	        <p class="western" style="margin-top: 0.17in; line-height: 0.22in"><font style="font-weight: bold;"
                                face="Arial, sans-serif"><font
                                  size="3">Basic
                                  Setup</font></font>
                            </p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">The
                        VITAL
                                          Gateway is built on top of&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://www.ubuntu.com/download/server/download"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Ubuntu
                                                Server</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          The Gateway requires two network cards, but does not require
                                          virtualization hardware. Generally speaking the machine will
                                          be an
                                          Apache webserver with a PostgreSQL database that also acts as
                                          a NAT
                                          gateway for the VM networks. The CPU and I/O, both disk and
                                          network,
                                          should be fairly modest for a small (support for up to 100
                                          concurrent
                                          VMs) VITAL setup. Most of the CPU and I/O load with be on the</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Xen
                                                Node</span></span></font></font></span></a></u></span></font></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">First,
                        install
                                          the base&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://www.ubuntu.com/download/server/download"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Ubuntu
                                                Server</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          Once the base OS has been installed, login as&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">root</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                        add
                                          the following packages to allow remote access:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">aptitude
                        install
                                            openssh-server screen</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Once
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">ssh
                                            server</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;is
                        setup,
                                          it will be easier to complete the rest of the installation by
                                          remotely connecting to the Gateway from a machine with a GUI
                                          and
                                          proper web browser in order to cut-n-paste instructions when
                                          needed.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">The
                        server
                                          will require the following packages to be installed.
                                          PostgreSQL should be configured to only listen on</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">localhost</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          The&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/gateway-setup.sh"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">gateway-setup.sh</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file
                        bundles
                                          the following instructions:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">aptitude
                        install
                                            apache2 postgresql php5 libapache2-mod-php5 php5-pgsql</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">aptitude
                        install
                                            bmon iftop tcptrack saidar tcpdump vlan nfs-common
                                            ifenslave-2.6 libjpeg62</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Additionally,
                        you
                                          can also install your prefered sftp server application
                                          (vsftpd,
                                          pure-ftpd, proftpd, etc) to allow file transfers in and out of
                                          the
                                          virtual class networks, or use other types of online storage
                                          services
                                          such as&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://owncloud.org/"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">owncloud</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;to
                        provide
                                          a web-based file transfer mechanism into the class networks.
                                          An existing university online storage system can also be
                                          integrated.
                                          In all cases, authentication must be handled outside of the
                                          VITAL
                                          interface and the appropriate firewall rules will need to be
                                          added to
                                          the gateway machine.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">After
                        the
                                          packages have been installed, you will need enable packet
                                          forwarding by setting&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">net.ipv4.ip_forward
                        =
                                            1</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;in
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/sysctl.conf</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file.
                        This
                                          allows the class VLAN to have access to external resources if
                                          needed. Lastly, you will need to configure Apache to only
                                          listen for
                                          HTTPS. This could be done with&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://www.whoopis.com/howtos/apache-rewrite.html"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">mod_rewrite</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          or simply disabling HTTP.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Next,
                        you
                                          should setup the inside network interface as bounded channel
                                          (bond0) with 1 or more NIC cards as follows. In this simple
                                          example I
                                          am only bounding 1 NIC card. Alternatively, I could have
                                          created an
                                          alias for&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">bond0</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          Many of the scripts assume&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">bond0</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                        so
                                          it must be configured. Add the following lines to
                                          the&nbsp;</span></span></font></font></font></span><code><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/network/interfaces</span></span></font></font></font></span></code><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">file.</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">auto
                                            bond0&nbsp;<br>
                                            iface bond0 inet static&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;address
                                            192.168.35.1&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;netmask
                                            255.255.255.0&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;slaves eth1&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;bond_mode
                                            balance-rr&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;bond_miimon
                                            1000&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;bond_downdelay 0&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;bond_updelay
                                            0</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">You
                        should
                                          also remove, or comment out, the configuration for (in this
                                          example) the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">iface
                                            eth1</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          or any other interface which you include in the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">bond0</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;bonded
                        channel.
                                          You may find more online about&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://help.ubuntu.com/community/UbuntuBonding"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">bonded
                                                channel</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">You
                        should
                                          also feel free to install any monitoring tools you would like
                                          in order to keep an eye on the system (eg,</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://munin-monitoring.org/"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Munin</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://bandwidthd.sourceforge.net/"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Bandwidthd</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          etc).</span></span></font></font></font></span></p>
                            <h3 class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                              align="LEFT">
                              <font style="font-weight: bold;" face="Arial, sans-serif"><font size="3">Database
                                  Setup</font></font></h3>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">First
                        you
                                          will need to create the database, set permissions, and set the
                                          password (you will be prompted for a new DB passwords
                                          for&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">root</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">postgres</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">):</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">su
                                            postgres</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">createuser
                        -a
                                            -d -P -U postgres root</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">createdb
                        -O
                                            root vlab</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">psql
                        -d
                                            vlab --command "\password postgres"</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">exit</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Afterwards,
                        modify
                                          the authenication method near the bottom of
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/postgresql/8.4/main/pg_hba.conf</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;from&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">ident</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;to</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">md5</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;as
                                          follows:</span></span></font></font></font></span></p>
                            <pre class="western" style="text-align: left"><span style="font-variant: normal"><font
                        color="#000000">        </font></span><span
                        style="font-variant: normal"><font
                        color="#000000"><font
                        face="Arial, sans-serif"><font
                        size="3"><span
                        style="font-style: normal"><span
                        style="font-weight: normal">#local   all         postgres                          ident</span></span></font></font></font></span>
                        <span style="font-variant: normal"><font color="#000000">        </font></span><span
                        style="font-variant: normal"><font
                        color="#000000"><font
                        face="Arial, sans-serif"><font
                        size="3"><span
                        style="font-style: normal"><span
                        style="font-weight: normal">local   all         postgres                          md5</span></span></font></font></font></span>
                        <span style="font-variant: normal"><font color="#000000">        </font></span><span
                        style="font-variant: normal"><font
                        color="#000000"><font
                        face="Arial, sans-serif"><font
                        size="3"><span
                        style="font-style: normal"><span
                        style="font-weight: normal">local   all         root                          trust</span></span></font></font></font></span></pre>
                            <p class="western" align="LEFT">
                              <span style="font-variant: normal"><font color="#000000"><font face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Then,
                        restart
                                          PostgreSQL (</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/init.d/postgres
                                            restart</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">)
                                          and confirm the password is set and working from for
                                          the</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">postgres</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;account
                                          (</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">psql
                        -d
                                            vlab -U postgres -W</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">).
                        Additionally,
                                          confirm you should also be able to log into the DB from
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">root</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;account
                        without
                                          a password (</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">psql
                        -d
                                            vlab</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">).
                        This
                                          is needed for the controller to operate correctly.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Next,
                        using
                                          the database scripts available from the&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/download.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">deployment
                                                bundle</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          create and populate the tables:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">psql
                        -d
                                            vlab -f vlab-deploy/config/db-setup/vlab-schema.sql</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">psql
                        -d
                                            vlab -f vlab-deploy/config/db-setup/vlab-data.sql</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">add-accounts.sh</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">At
                        this
                                          point you will have 300 preallocated accounts. These accounts
                                          do
                                          not yet have any VM assigned to them. Once the setup is
                                          complete, you
                                          will be able to upload a&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/add-image.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">VM
                        base
                                                image</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/define-class.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Define
                        a
                                                Class</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/create-section.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Create
                        a
                                                Section</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          After, you can send the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">class
                        registration
                                            code</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;for
                        the
                                          students to use in order to&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/user_docs/registration-view.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Register</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          Next, you should set the passwords for the sftp accounts with
                                          the&nbsp;</span></span></font></font></font></span><code><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">reset-sftp.sh</span></span></font></font></font></span></code><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;script
                        in
                                          the&nbsp;</span></span></font></font></font></span><code><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">vlab-deploy/config/gateway/admintools/scripts/</span></span></font></font></font></span></code><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;directory
                        from
                                          the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/download.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">deployment
                                                bundle</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">cd
                                            vlab-deploy/config/gateway/admintools/scripts/</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">./reset-pwd.sh
                        1
                                            300</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">./reset-sftp.sh
                                            &lt;SFTP_UID/PWD_FILE&gt;</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">The
                        format
                                          of the&nbsp;</span></span></font></font></font></span><code><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">&lt;SFTP_UID/PWD_FILE&gt;</span></span></font></font></font></span></code><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file
                                          is:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">&lt;UID&gt;
                                            &lt;PWD&gt;</span></span></font></font></font></span></code></blockquote>
                            <p class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                              align="LEFT">
                              <font face="Arial, sans-serif"><font size="3">Each UID/PWD pair should
                                  be put on a new line.</font></font></p>
                            <h3 class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                              align="LEFT">
                              <font face="Arial, sans-serif"><font size="3">Webserver</font></font></h3>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">The
                        VLAB
                                          webserver should be configured to accept only HTTPS
                                          connections.
                                          In the standard install, this can be done by modify
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/apache2/sites-enabled/000-defualt</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file
                        by
                                          added the following lines to the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">&lt;VirtualHost
                                            *:80&gt;</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">directive:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">RewriteEngine
                                            On&nbsp;<br>
                                            RewriteCond %{HTTPS} off&nbsp;<br>
                                            RewriteRule (.*)
                                            https://%{HTTP_HOST}%{REQUEST_URI}</span></span></font></font></font></span></code></blockquote>
                            <p class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                              align="LEFT">
                              <font face="Arial, sans-serif"><font size="3">Then enable SSL and
                                  rewrite support:</font></font></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">a2enmod
                        ssl
                                            rewrite</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">a2ensite
                                            default-ssl</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">From
                                          the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/download.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">deployment
                                                bundle</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          copy the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">vlab-deploy/config/gateway/web/interim/</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;directory
                        to
                                          the webroot (</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/var/www</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">).
                        Next
                                          copy and password protect (admin access
                                          only)&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">vlab-deploy/config/gateway/web/glf/</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;to
                        an
                                          admin webroot directory. This can be done by adding the
                                          following
                                          lines to&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/apache2/sites-enabled/default-ssl</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file:</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">&lt;Directory
                                            /var/www/glf&gt;&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;AuthType
                                            Basic&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;AuthName
                                            "Restricted"&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;AuthUserFile
                                            /usr/local/apache/passwd/passwords&nbsp;<br>
                                            &nbsp;&nbsp;&nbsp;Require
                                            user glfadmin&nbsp;<br>
                                            &lt;/Directory&gt;</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">This
                        directive
                                          assumes the admin user account name is&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">glfadmin</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                        the
                                          password hash (created using&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">htpasswd</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">)
                                          is stored in the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/usr/local/apache/passwd/passwords</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Then
                                          modify&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/var/www/config.php</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                        /var/www/glf/conf.php
                                          with the appropriate configuration information.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Additionally,
                        you
                                          will need to create the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/var/log/vlab</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;directory
                        and
                                          give ownership to the Apache user (</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">www-data</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">):</span></span></font></font></font></span></p>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">mkdir
                                            /var/log/vlab</span></span></font></font></font></span></code></blockquote>
                            <blockquote class="western" style="text-align: left"><code><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">chown
                        www-data:www-data
                                            /var/log/vlab/</span></span></font></font></font></span></code></blockquote>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Lastly,
                        restart
                                          the websever (</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/init.d/apache2
                                            restart</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">).</span></span></font></font></font></span></p>
                            <h3 class="western" style="font-variant: normal; font-style: normal; font-weight: normal"
                              align="LEFT"><span
                                style="font-weight: bold;"><font
                                  face="Arial, sans-serif"><font
                                    size="3">Controller
                                    Setup</font></font></span></h3>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Before
                        the
                                          controller can be setup, the network fileserver will need to
                                          be
                                          setup first. In the basic configuration, the network
                                          fileserver is on
                                          the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Xen
                                                Node</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          which should export the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/home/vlab_scp/</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;directory.
                        Modify
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/etc/fstab</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file
                        with
                                          the following these&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/fstab-additional-lines.txt"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">additional
                                                lines</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;(these
                        additions
                                          assume the the NSF server is named&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">vlab-new-store</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                        the
                                          following mount points
                                          exist:&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/home/OS_Images</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/home/vlab_scp</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/home/vmdsk</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Next
                        you
                                          will have to copy the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">root</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;ssh
                        key
                                          onto the&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Xen
                                                Node</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;following
                                          this&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="http://www.thegeekstuff.com/2008/11/3-steps-to-perform-ssh-login-without-password-using-ssh-keygen-ssh-copy-id/"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">guide</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          This will allow the controller scripts to connect to the Xen
                                          Node
                                          without password prompts.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Then
                                          modify&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">/home/vlab_scp/cntl/interim/config.php</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;with
                        the
                                          appropriate configuration information.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Then&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">vlab-deploy/config/gateway/startup/startup-gateway.sh</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;file,
                        from
                                          the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/download.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">deployment
                                                bundle</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          can be used to initiate the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">controller
                                            script</span></span></font></font></font></span></em><span style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">.
                                          If needed, this script can be configured to provide VLAN acess
                                          for
                                          the class networks. VLAN access is only needed if external
                                          network
                                          access is required (eg. SFTP server, internet, etc), or the
                                          class
                                          network needs a DHCP server setup on gateway machine.</span></span></font></font></font></span></p>
                            <p class="western" align="LEFT"><span style="font-variant: normal"><font color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">Lastly,
                        once
                                          the&nbsp;</span></span></font></font></font></span><em><span style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">startup-gateway.sh</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;has
                        been
                                          used to start the&nbsp;</span></span></font></font></font></span><em><span
                                  style="font-variant: normal"><font
                                    color="#000000"><font
                                      face="Arial, sans-serif"><font
                                        size="3"><span
                                          style="font-style: normal"><span
                                            style="font-weight: normal">Controller</span></span></font></font></font></span></em><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and
                                          the&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/setup/xen-node.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Xen
                                                Node</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;has
                        been
                                          setup, in order to login to the user account, you must&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/add-image.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Add
                        a
                                                Base Image</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">,
                                          then&nbsp;</span></span></font></font></font></span><font color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/define-class.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Define</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;and&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/create-section.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Create</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;a
                        class
                                          in order to assign VM to user accounts. Once you have done
                                          this, you can get the&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/class-info.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">Class
                                                Info</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">&nbsp;to
                        verify
                                          the class setup and valid&nbsp;</span></span></font></font></font></span><font
                                color="#000080"><span
                                  lang="zxx"><u><a
                                      href="https://vital.poly.edu/release/admin_docs/user-info.php"><span
                                        style="font-variant: normal"><font
                                          face="Arial, sans-serif"><font
                                            size="3"><span
                                              style="font-style: normal"><span
                                                style="font-weight: normal">User
                                                Info</span></span></font></font></span></a></u></span></font><span
                                style="font-variant: normal"><font
                                  color="#000000"><font
                                    face="Arial, sans-serif"><font
                                      size="3"><span
                                        style="font-style: normal"><span
                                          style="font-weight: normal">assigned
                        to
                                          the class.</span></span></font></font></font></span></p>
                            <p class="western"><font face="Arial, sans-serif"><font size="3"><br>
                                </font></font><br>
                              <br>
                            </p>
                        </div>
	    </div>
	    <div class="tab-pane" id="tab3">
	    	<div class="content pre-scrollable">
	      <p>I'm in Section 3.</p>
	  </div>
	    </div>
	  </div>
	</div>



		</div>
		<div class="col-md-4">
		  <p><h3>Download Area</h3></p>
		  <br><br>
		  <ul><li><a href="https://vital.poly.edu/release/labs"><h4>Lab Assignments<h4></a>
		  </li>
	      <li> <a href="https://vital.poly.edu/release/Vlab_Bundle.zip"><h4>Source Code<h4></a>
		  </li>

		  </ul>
                      
                      
                     
                      <br><br>
                      <p>If you encounter any issues or have any feature
                        requests, please contact vital@isis.poly.edu </a></p>

		</div>


	</div>

<br><br>

	 <?php
	  include ('../interim/footer.php');
	  ?>


