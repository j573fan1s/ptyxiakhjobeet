<!-- apps/frontend/modules/job/templates/showSuccess.php -->
<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>
 

<div id="job">
  <h1><?php echo $Jobeetjob->getCompany() ?></h1>
  <h2><?php echo $Jobeetjob->getLocation() ?></h2>
  <h3>
    <?php echo $Jobeetjob->getPosition() ?>
    <small> - <?php echo $Jobeetjob->getType() ?></small>
  </h3>
 
  <?php if ($Jobeetjob->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $Jobeetjob->getUrl() ?>">
        <img src="/uploads/jobs/<?php echo $Jobeetjob->getLogo() ?>"
          alt="<?php echo $Jobeetjob->getCompany() ?> logo" />
      </a>
    </div>
  <?php endif; ?>
 
  <div class="description">
    <?php echo simple_format_text($Jobeetjob->getDescription()) ?>
  </div>
 
  <h4>How to apply?</h4>
 
  <p class="how_to_apply"><?php echo $Jobeetjob->getHowToApply() ?></p>
 
  <div class="meta">
    <small>posted on <?php echo $Jobeetjob->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
  </div>
 
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('job/edit?id='.$Jobeetjob->getId()) ?>">
      Edit
    </a>
  </div>
</div>