<tr class='pagination_row'>
    <td colspan='<?php echo $cols-1; ?>'>
        <div class="paging">
            <?php
                //$paginator->options(array('url' => $this->passedArgs));
                
                echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));                
            ?>
            | 	<?php echo $paginator->numbers();?>
            <?php
                echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));                
            ?>
            <?php
                //debug($paginator);
                $cntrlr = $this->params['controller'];
                //echo $form->input('limit',array('label'=>false, 'type'=>'select', 'options'=>$myConfig->getPaginationLimit(), 'div'=>false, 'selected'=>$current_pagination_limit, 'onchange'=>'_setPaginationLimit($(this).val());'));
            ?>
            <script type="text/javascript">
                function _setPaginationLimit(limit){
                    window.location.href = "/admin/<?php echo $cntrlr; ?>/pagination_limit/"+limit;
                }
            </script>
        </div>
    </td>
    <?php if(!isset($delete)):?>
    <td align="right" style="text-align:center;">
        <?php
        	echo $form->submit(__('Delete',true), array('class'=>'admin_button', 'onclick'=>'return confirm("Are you sure want to delete the selected records?")')); 
        ?>
    </td>
    <?php endif;?>
</tr>