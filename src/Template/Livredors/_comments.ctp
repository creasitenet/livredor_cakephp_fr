<?php if(isset($comments)): ?> 

	<?php if(count($comments)>0): ?>
				
		<?php foreach($comments as $i => $e): ?>
			
			<div id="comment_<?php echo $e->id; ?>" class="comments">
			                                           
				<p class="title">Par <?php echo $e->pseudo; ?> le <?php echo date('d-m-Y à H:i:s', strtotime($e->created)); ?> </p>
				<p class="text"><?php echo nl2br(htmlentities($e->text)); ?></p>
							
			</div>
			
		<?php endforeach; ?>
		
		<?php //echo $this->Paginator->sort('id'); ?>
		<div id="pagination">
			<ul class="pagination">
				<?php echo $this->Paginator->numbers(); ?>
			</ul>
		</div>
				
	<?php else: ?>
	
		<p class="lead text-danger">Pas de commentaires</p>
	
	<?php endif; ?>
				
<?php else: ?>

    <p class="lead text-danger">Pas de commentaires</p>

<?php endif; ?>
				
				