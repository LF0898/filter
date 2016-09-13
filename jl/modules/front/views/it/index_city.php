<?php
namespace app\modules\front\controllers;

use app\models\City;

$id   = \Yii::$app->request->get('provinceid');
$sql  = 'select * from from province where fatherid=:id';
$city = City::findBySql($sql, [':id' => $id])->all();
?>
<select id="city" name="city" onchange="selectArea()">
	<option value="0">请选则市</option>
	<?php

foreach ($city as $k => $v) {
    ?>
		<option value='<?php echo $v['cityid']; ?>'><?php echo $v['city']; ?></option>
	<?php

}
?>
</select>