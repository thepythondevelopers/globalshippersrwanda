<main>
    <div class="slim-container m-auto">
        <div
            class="pt-16 pb-1 md:py-20 md:pie-24"><h1
                class="text-xl md:text-2xl font-bold leading-tight"><?php echo
                $content->heading;?></h1>
                <span
                class="text-gray-300 font-bold"><?php $data=
                strtotime($content->date_created);
                $date =date("d M, y",$data);
                print_r($date);
                ?></span>
            </div>
        <div class="flex items-start flex-col-reverse md:flex-row md:justify-between md:gap-16">
            <div id="blog-content"><div class="pt-5 md:pt-0">
                <div class="mx-auto mb-5 md:mb-10">
                    <span style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%">
                        <span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%">
                            <img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                                    alt aria-hidden="true" src="<?php echo base_url().$content->imgpath;?>">
                        </span>
                      </noscript>
                    </span>
                </div>
                <div class="wysiwyg !max-w-none !text-black pb-10"><p>
                    <?php echo $content->description;?></p>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
<div class="wide-container mx-auto px-5 bg-white z-20 relative">
    <h2 class="text-2xl font-bold pt-10">Read more blogs</h2>
        <div class="pt-10 pb-5 grid grid-cols-1 sm:grid-cols-3 gap-x-5 gap-y-10">
        <?php foreach($blog as $data){ 
            
            ?>
            <a class="flex flex-col items-start group overflow-hidden " href="<?php echo base_url('blog/'.$data->id)?>">
            <div class="mx-auto rounded-lg overflow-hidden">
                <span  style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                        <img alt aria-hidden="true" src="<?php echo base_url().$content->imgpath;?>" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                    </span>
                         <!-- <img alt="Celebrate-Fathers-Day-with-globalshipperswanda"
                        src="<?php echo base_url()?>assets/imgs/imgpsh_fullsize_anim.png"
                        decoding="async" data-nimg="intrinsic"
                        class="transition-all rounded-lg"
                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;"
                        noscript>
                        </noscript> -->
                    </span>
            </div>
             <span class="text-gray-400 font-normal text-sm pt-3 pb-1"> <?php $datetime= strtotime($data->date_created);
                                    $convertdate = date("d M, y",$datetime);
                                    print_r($convertdate);?>
             </span>
            <h2 class="text-md font-semibold group-hover:underline pb-1"><?php echo $data->heading;?>
            </h2>
            </a>
            <?php  } ?>
        </div>
        
</div>
</main>
<!-- <div class="w-full flex justify-center pb-10"><button
        class="not-wysiwyg btn group btn-dark-blue font-semibold rounded-xs relative"><span
            class="whitespace-nowrap">Load
            more</span></button></div> -->
        
       