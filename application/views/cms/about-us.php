<script src="https://cdn.tailwindcss.com"></script>
<style>
        :root,
        .light,
        .light-theme {
          --color-page-background: white;
        }
        .dark,
        .dark-theme {
          --color-page-background: var(--slate-1);
        }
        body {
          background-color: var(--color-page-background);
        }
      </style>
<div
    class="overflow-x-hidden bg-white selection:bg-indigo-300 selection:text-indigo-900"
  >
    <div id="__next">
    
      <div
        data-is-root-theme="true"
        data-accent-color="indigo"
        data-gray-color="slate"
        data-has-background="false"
        data-panel-background="translucent"
        data-radius="small"
        data-scaling="100%"
        class="radix-themes __variable_d680cf"
      >
        <div class="grow">
          <div class="twoColumnedWithImage">
            <div
              class="container w-full xl:container md:max-w-none xl:px-10 2xl:max-w-[2360px] 2xl:px-20"
            >
              <div class="mt-10 flex flex-col gap-5 lg:mt-20 lg:gap-20">
                <div class="flex flex-col gap-5 lg:flex-row lg:gap-20">
                  <div class="lg:w-1/2">
                    <h1 class="rt-Heading rt-r-size-4xl rt-r-weight-bold">
                      <?php echo $sec1->title;?>
                    </h1>
                    <div class="relative mt-10">
                      <!-- <div
                        class="before:content-[' '] flex flex-row gap-3 pl-24 before:absolute before:left-0 before:top-1/2 before:h-0.5 before:w-20 before:translate-y-1/2 before:bg-slate-300"
                      > -->
                        <!-- <svg
                          class="h-8 w-8"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                        <svg
                          class="h-8 w-8"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        > 
                          <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                        <svg
                          class="h-8 w-8 undefined"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                          ></path>
                        </svg> -->
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="lg:w-1/2">
                    <p class="rt-Heading rt-r-size-2xl rt-r-weight-bold">
                    <?php echo $sec1->description;?>
                    </p>
                    <div
                      class="relative z-20 mb-8 mt-8 justify-start sm:flex sm:items-center sm:space-x-5 lg:mb-0 lg:mt-12"
                    >
                    <a href="<?php echo base_url('signup');?>" target="_blank"class="btn btn-primary rounded-pill py-3 px-5">Get Started</a>
                      <!-- <a
                        class="group inline-flex items-center justify-center rounded-lg text-lg font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 transition-all duration-200 hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 text-white bg-indigo-950 hover:bg-indigo-900 active:bg-indigo-800 active:text-indigo-300 focus-visible:outline-indigo-900 px-8 py-4"
                        href="#"
                        rel="noreferrer"
                      >
                        Get Started
                      </a> -->
                    </div>
                  </div>
                </div>
                <!-- <div>
                <img alt="Internation Mail Forwarding Services" loading="lazy" width="1800" height="1200" decoding="async" data-nimg="1" class="rounded-2x mx-auto aspect-[12/7] rounded-2xl object-cover md:max-w-5xl" style="color:transparent"  src="<?php //echo $sec1->imgpath;?>" />
                </div> -->
              </div>
            </div>
          </div>
          <div class="default my-10 lg:my-20">
            <div
              class="w-full lg:mx-auto container w-full xl:container md:max-w-none xl:px-20"
            >
              <div class="relative mb-3 inline-block w-auto">
                <div
                  class="absolute bottom-1 z-0 h-2 w-full bg-indigo-100 group-hover:bg-indigo-200"
                ></div>
                <p class="relative z-10 font-semibold"><?php echo $sec2->title;?></p>
              </div>
              <div class="max-w-2xl">
                <h2
                  class="leading-tight tracking-tight text-[min(6vw,2.5rem)] font-bold mb-3"
                >
                <?php echo $sec2->heading;?>
                </h2>
                <p class="leading-tight tracking-tight text-xl">
                <?php echo $sec2->description;?>
                </p>
              </div>
              <div
                class="mt-10 flex flex-col items-center gap-20 rounded-2xl bg-slate-50 p-10 lg:flex-row"
              >
                <div class="w-1/3 w-full">
                  <div class="flex flex-col gap-5">
                    <?php //foreach($sec6 as $data6){?>
                      <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <!-- <img
                            alt="package consolidation"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php //echo base_url()?>assets/cms/icons/check.svg"
                          /> -->
                          <?php echo $sec2->points;?>
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                           <?php //echo $data6->title;?>
                          </h3>
                          <p><?php //echo $data6->description;?></p>
                        </div>
                       
                      </div>
                    </div>
                   <?php// }?>
                   
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="personal shopper service"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Personal Shopper Service
                          </h3>
                          <p>Overcome shopping barriers with assistance.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="Real-time Tracking"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Real-time Tracking
                          </h3>
                          <p>Stay informed about package status.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="Exclusive U.S. Access"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Exclusive U.S. Access
                          </h3>
                          <p>Discover unique deals and products.</p>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="w-2/3 w-full">
                  <div class="w-full">
                    <img
                      fetchpriority="high"
                      width="811"
                      height="480"
                      decoding="async"
                      data-nimg="1"
                      class="rounded-2xl"
                      style="color: transparent"
                      src="<?php echo base_url().$sec2->imgpath;?>"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="default">
            <div
              class="w-full lg:mx-auto container w-full xl:container md:max-w-none xl:px-20"
            >
              <div class="my-10 lg:my-20">
                <div class="max-w-2xl">
                  <h2
                    class="leading-tight tracking-tight text-[min(6vw,2.5rem)] font-bold mb-3"
                  >
                   <?php echo $sec3->title;?>
                  </h2>
                  <p class="leading-tight tracking-tight text-xl">
                  <?php echo $sec3->description;?>
                  </p>
                </div>
                <div
                  class="mt-10 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8"
                >
                <?php 
                foreach($sec4 as $record){

                  ?>
                  <div>
                  <div>
                    <img
                      alt="shop &amp; ship icon"
                      loading="lazy"
                      width="128"
                      height="128"
                      decoding="async"
                      data-nimg="1"
                      class="mb-5 h-14 w-auto"
                      style="color: transparent"
                      src="<?php echo base_url($record->imgpath);?>"
                    />
                  </div>
                  <h3
                    class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                  >
                    <?php echo $record->title;?>
                  </h3>
                  <p>
                  <?php echo $record->description;?>
                  </p>
                </div>
               <?php }
                ?>
                
                  <!-- <div>
                    <div>
                      <img
                        alt="No US sales-tax icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/salex-tax-free-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      No US sales-tax
                    </h3>
                    <p>
                      We provide a tax-free address for your shopping. This
                      means that our members can buy things without having to
                      pay taxes on them.
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="Discounted Carrier Rates icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/salex-tax-free-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Discounted Carrier Rates
                    </h3>
                    <p>
                      We get discounts from DHL, FedEx, UPS and the USPS because
                      we ship a lot. This way, we can offer you low rates too.
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="Superior Packing icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/discouted-carrier-rates-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Superior Packing
                    </h3>
                    <p>
                      We pack every shipment by hand so that your items will not
                      break. We also take out any packing material that is not
                      needed to save you money.
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="Reduce your shipping weight icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/reduce-package-weight-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Reduce your shipping weight
                    </h3>
                    <p>
                      You can save money by using Forwardme to combine packages
                      into one shipment. This is cheaper than shipping the items
                      separately.
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="Shop discounts advantages icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/discounted-shopping-opportunity.svg"
                      />
                      
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Shop discounts advantages
                    </h3>
                    <p>
                      You can get deals by looking at our online deals portal,
                      following us on social media, and more.
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="personal shopper icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/personal-shopper-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Personal Shopper
                    </h3>
                    <p>
                      You do the shopping. Add items from multiple stores to
                      your personal shopper cart!
                    </p>
                  </div> -->
                  <!-- <div>
                    <div>
                      <img
                        alt="Enable 24/7 support icon"
                        loading="lazy"
                        width="128"
                        height="128"
                        decoding="async"
                        data-nimg="1"
                        class="mb-5 h-14 w-auto"
                        style="color: transparent"
                        src="<?php echo base_url()?>assets/cms/icons/shop-ship-support-icon.svg"
                      />
                    </div>
                    <h3
                      class="leading-tight tracking-tight text-xl mb-1 font-semibold"
                    >
                      Enable 24/7 support
                    </h3>
                    <p>
                      We ensure that you can shop and ship at your convenience,
                      knowing that help is just a click away.
                    </p>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="default my-10 lg:my-20">
            <div
              class="w-full lg:mx-auto container w-full xl:container md:max-w-none xl:px-20"
            >
              <div class="relative mb-3 inline-block w-auto">
                <div
                  class="absolute bottom-1 z-0 h-2 w-full bg-indigo-100 group-hover:bg-indigo-200"
                ></div>
                <p class="relative z-10 font-semibold"></p>
              </div>
              <div class="max-w-2xl">
                <h2
                  class="leading-tight tracking-tight text-[min(6vw,2.5rem)] font-bold mb-3"
                >
                  <?php echo $sec5->title;?>
                </h2>
                <p class="leading-tight tracking-tight text-xl">
                <?php echo $sec5->description;?>
                </p>
              </div>
              <div
                class="mt-10 flex flex-col items-center gap-20 rounded-2xl bg-slate-50 p-10 lg:flex-row"
              >
                <div class="w-1/3 w-full">
                  <div class="flex flex-col gap-5">
                    <?php //foreach($sec7 as $data7){
                      ?>
                        <div>
                        <div
                          class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                        >
                          <div>
                            <!-- <img
                              alt="Checkmark Icon"
                              loading="lazy"
                              width="24"
                              height="24"
                              decoding="async"
                              data-nimg="1"
                              class="h-8 w-auto"
                              style="color: transparent"
                              src="<?php echo base_url()?>assets/cms/icons/check.svg"
                            /> -->
                            <?php echo $sec5->points;?>
                          </div>
                          <div>
                            <!-- <h3 class="leading-tight tracking-tight text-xl mb-1">
                              <?php //echo $data7->title;?>
                            </h3>
                            <p><?php //echo $data7->description;?></p> -->
                          </div>
                        </div>
                      </div>
                      <?php
                   // }?>
                  
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="Checkmark Icon"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Multiple Carrier Options
                          </h3>
                          <p>Choose from various shipping partners.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="Checkmark Icon"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Customizable Insurance Plans
                          </h3>
                          <p>Secure packages with tailored coverage.</p>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div>
                      <div
                        class="relative mb-5 flex flex-col gap-5 overflow-hidden lg:flex-row"
                      >
                        <div>
                          <img
                            alt="Checkmark Icon"
                            loading="lazy"
                            width="24"
                            height="24"
                            decoding="async"
                            data-nimg="1"
                            class="h-8 w-auto"
                            style="color: transparent"
                            src="<?php echo base_url()?>assets/cms/icons/check.svg"
                          />
                        </div>
                        <div>
                          <h3 class="leading-tight tracking-tight text-xl mb-1">
                            Online Account Management
                          </h3>
                          <p>Easily manage shipments and preferences.</p>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="w-2/3 w-full">
                  <div class="w-full">
                    <img
                      fetchpriority="high"
                      width="805"
                      height="480"
                      decoding="async"
                      data-nimg="1"
                      class="rounded-2xl"
                      style="color: transparent"
                      src="<?php echo base_url().$sec5->imgpath;?>"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  















