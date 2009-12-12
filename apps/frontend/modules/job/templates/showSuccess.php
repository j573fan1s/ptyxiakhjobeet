<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $JobeetJob->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $JobeetJob->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $JobeetJob->getType() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $JobeetJob->getCompany() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $JobeetJob->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $JobeetJob->getUrl() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $JobeetJob->getPosition() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $JobeetJob->getLocation() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $JobeetJob->getDescription() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $JobeetJob->getHowToApply() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $JobeetJob->getToken() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $JobeetJob->getIsPublic() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $JobeetJob->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $JobeetJob->getEmail() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $JobeetJob->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $JobeetJob->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $JobeetJob->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$JobeetJob->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
