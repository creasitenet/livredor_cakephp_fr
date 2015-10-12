<h2>Livre d'or - CakePHP 3.0</h2>
<h3>Il y a actuellement <?php echo $this->Paginator->counter('{{count}}'); ?> commentaires
	<a class="btn btn-primary pull-right" data-toggle="collapse" href="#collapseCommenter" aria-expanded="false" aria-controls="collapseCommenter">Ecrire un commentaire</a>
</h3>

<div class="clearfix"></div>
<div id="collapseCommenter" class="collapse <?php //if (Session::get_flash('error_growl') != ''):  in <?php //endif; ?>">				
	<?php include_once('add.ctp'); ?> 
</div>
			
<!--  Commentaires -->
<?php if (isset($comments)): ?>
    <?php include_once('_comments.ctp'); ?>
<?php endif; ?>
					
			