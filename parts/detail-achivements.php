<?php

$id = 1;
$achivements = GetUserValue('detail_achivements',$id);

if (!empty($achivements))
{
?>      <div class="detail detail-achivements">
        <h1>Conquistas</h1>
<?php

  $parts = explode(";",$achivements);
  foreach($parts as $achivement)
  {
    echo "        <p>".$achivement."</p>\n";
  }
  ?>      </div>
<?php
}

      // <div class="detail detail-achivements">
      //   <h1>Conquistas</h1>
      //     <p clas="editme">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta deserunt facilis sapiente, veniam velit earum quibusdam enim nemo blanditiis consequuntur similique id sit ea dolor fugit inventore quo excepturi. Quo?</p>
      //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium delectus optio veniam non veritatis vel. Nesciunt nisi explicabo tenetur quibusdam placeat, modi aperiam aspernatur, adipisci reprehenderit, ea nihil maiores corporis.</p>
      // </div>