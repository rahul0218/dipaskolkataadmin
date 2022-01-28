
<?php echo $title; ?>

<div class="content">
<table class="table table-bordered table-responsive-sm table-hover">
<thead class="table-primary">
  
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Course</th>
      <th scope="col">Question</th>
      <th scope="col">Date & Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($adqry as $adqr) : ?>
      
      <td><?php echo $adqr['adq_name']; ?></td>
      <td><?php echo $adqr['adq_ph']; ?></td>
      <td><?php echo $adqr['adq_crs']; ?></td>
      <td><?php echo $adqr['adq_msg']; ?></td>
      <td><?php echo $adqr['adq_updt_at']; ?></td>
      <?php endforeach ; ?>
    </tr>
    
  </tbody>
</table>
</div>