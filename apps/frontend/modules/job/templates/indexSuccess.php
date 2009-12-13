  <h1>JobeetJobs List</h1>
  <?php use_stylesheet('jobs.css') ?>

  <div id="jobs">
  <!--<table >-->
  <table class="jobs">
    <thead>
      <tr>
      <!-- <th>Id</th>
	<th>Category</th>
	<th>Type</th>
	<th>Company</th>
	<th>Logo</th>
	<th>Url</th>
	<th>Position</th>
	<th>Location</th>
	<th>Description</th>
	<th>How to apply</th>
	<th>Token</th>
	<th>Is public</th>
	<th>Is activated</th>
	<th>Email</th>
	<th>Expires at</th>
	<th>Created at</th>
	<th>Updated at</th>-->
      </tr>
    </thead>
    <tbody>
      <?php foreach ($JobeetJobs as $i => $JobeetJob): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">

  <td class="location"><?php echo $JobeetJob->getLocation() ?></td>
  <td class="position">
	    <a href="<?php echo url_for('job/show?id='.$JobeetJob->getId()) ?>">
	      <?php echo $JobeetJob->getPosition() ?>
	    </a></td>

  <td class="company"><?php echo $JobeetJob->getCompany() ?></td>
  
  <!--  <td><?php echo $JobeetJob->getCategoryId() ?></td>
	<td><?php echo $JobeetJob->getType() ?></td>
	<td><?php echo $JobeetJob->getCompany() ?></td>
	<td><?php echo $JobeetJob->getLogo() ?></td>
	<td><?php echo $JobeetJob->getUrl() ?></td>
	<td><?php echo $JobeetJob->getPosition() ?></td>
	<td><?php echo $JobeetJob->getLocation() ?></td>
	<td><?php echo $JobeetJob->getDescription() ?></td>
	<td><?php echo $JobeetJob->getHowToApply() ?></td>
	<td><?php echo $JobeetJob->getToken() ?></td>
	<td><?php echo $JobeetJob->getIsPublic() ?></td>
	<td><?php echo $JobeetJob->getIsActivated() ?></td>
	<td><?php echo $JobeetJob->getEmail() ?></td>
	<td><?php echo $JobeetJob->getExpiresAt() ?></td>
	<td><?php echo $JobeetJob->getCreatedAt() ?></td>
	<td><?php echo $JobeetJob->getUpdatedAt() ?></td> -->
  </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
  </div>