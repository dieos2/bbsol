<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="vbox">
    <section class="scrollable padder">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="/confronto/index/0">Todos</a></li>
          
        </ul>
   <div class="row">
            <div class="col-md-12">                         
                <div class="m-b-md"> <h3 class="m-b-none"><?= Html::encode($this->title) ?></h3> </div>
   

    <p>
        <?= Html::a('Nova Noticia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
          

           
            'titulo',
            'chamada',
            'id_user',
            'data',
            // 'status',
            // 'foto',
            // 'data_pub',
            // 'texto:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div></div>
    </section>
</section>