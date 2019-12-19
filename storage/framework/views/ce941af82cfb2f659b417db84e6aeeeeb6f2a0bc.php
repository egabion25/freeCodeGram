<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img style="width:130px;" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&oh=2d3ebd17e4a3865b8d6da1519da4f5d0&oe=5E828627" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1><?php echo e($user->username); ?></h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers </div>
                <div class="pr-5"><strong>212</strong> following</div>        
            </div>

        

            <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url ?? 'N/A'); ?> </a></div>

        </div>
    </div>


    <div class="row pt-5">

        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.40.823.823a/s480x480/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fmnl3-2.fna.fbcdn.net&_nc_cat=111&oh=235a3c7525825cfa6cb711efb5a04ac0&oe=5E6DBCB6" alt="">
        </div>

        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.0.749.749a/s640x640/80103355_194191338290631_4740082296644486422_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&_nc_cat=103&oh=7bf22820583d9d78bca51d650868e650&oe=5E877CD7" alt="">
        </div>

        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.29.804.804a/s480x480/73329016_500631560534931_6641163343711350786_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&_nc_cat=103&oh=13a844b02824ab731afd8c07c9ac0192&oe=5EB329DF" alt="">
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emmanuelgabion/Documents/code/freeCodeGram/resources/views/home.blade.php ENDPATH**/ ?>