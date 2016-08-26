<?php $this->load->view('admin/partials/html-head'); ?>
<style type="text/css">
	#content {
    background: #FFF;
    width: 100%;
    min-height: 800px;
    z-index: 18;
    padding-bottom: 25px;
    margin-left: 0px;
    margin-right: 20px;
    position: relative;
    left: auto;
    top: auto;
}
</style>
<div id="wrapper">
    <?php $this->load->view('admin/partials/nav'); ?>
    <?php if(isset($template)): ?>
    <?php $this->load->view("admin/{$template}"); ?>
    <?php endif; ?>
</div> <!-- #wrapper -->

<?php $this->load->view('admin/partials/html-footer'); ?>
