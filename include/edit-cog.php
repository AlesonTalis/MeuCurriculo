<?php

function EditCogWheel($aria_edit = "edit-type", $top0 = false, $aria_type = "normal")
{
  ?>

        <a class="btn btn-primary edit-mode-btn<?php if ($top0 == true) echo " edit-top"; ?>" aria-data="<?php echo $aria_edit; ?>" href="<?php echo "?edit=".$aria_edit."&type=".$aria_type; ?>">
          <span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
            <i class="fa fa-cog fa-stack-1x fa-inverse"></i>
          </span>
        </a>

<?php
}