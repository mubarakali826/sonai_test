<?php
$breadcrumbs = [
    ['text' => 'Home', 'url' => './'],
    ['text' => 'About Us',],
];

@include "components" . $checkLang . "/global/breadcrumb.php"
    ?>


<div class="ts-container-fluid">
    <section class="mb-5" id="company-profile-section">
        <h4 class="ts-fs-28">COMPANY PROFILE</h4>
        <hr />
        <div>
            <h5 class="ts-fs-20 fw-bold text-black">
            Anhui Yushi brake System Co., LTD.
            </h5>
            <p class="mb-05">
            was established in 1996 and specializes in the R&D and manufacturing of automobile and motorcycle brake pads and brake pads. It is China's largest motorcycle brake pad R&D and production enterprise, with an annual output of more than 16 million sets of brake pads. Since 2013, we have cooperated with well-known universities and research institutes to carry out core technology innovation reforms. Successfully developed an internationally advanced new formula of environmentally friendly and high-performance soluble ceramic friction materials.
            </p>
            <img class="w-100 mb-06" src="./assets/images/about/20190625100825032503.jpg" class="card-img-top"
                alt="..." />
    </section>
    <section class="mb-5">
        <h4 class="ts-fs-28">Development History</h4>
        <hr />
        <div>


            <?php

            $timeline = [
                "1996" => "With the deepening of China's reform and opening up, Wenzhou's private economy has begun to take off. In this environment, Ruian Yushi Electronic Original Factory emerged as the times require.",
                "2005" => "Through 10 years of accumulation and hard work, I have also seen too many safety issues caused by braking issues. I am well aware of the truth that 'running fast is not as fast as braking'. The company has transformed its research and development and manufacturing of brake systems, and established Fuzhou Yushi Motor Parts Co., Ltd.",
                "2010" => "The development of large displacement motorcycles in China has provided new products that are comparable to imported high-performance brake pads for car enthusiasts. We have started researching and developing new formula brake pads for high-performance vehicles and established the 'SONAI Sonaresen' brand.",
                "2017" => "Overseas expansion plan, establish Wenzhou Yushi New Material Technology Co., Ltd., mass produce high-performance ceramic brake pads, establish Pakistan Yushi Company, and begin the layout of the Middle East market.",
                "2018" => "Acquire European DXXXXV company, launch new products for the comprehensive upgrade of the 'SONAI Sonaresen' brand, SONAI sintered brake pads, and open up the European and American markets.",
                "2019" => "Established Thailand Yushi Company to deeply integrate with Southeast Asian modification culture. Established Anhui Yushi Brake System Co., Ltd., striving to create a highly automated production workshop. Bring new ceramic brake pads and sintered brake pads back to China.",
                "2023" => "Anhui Yushi Braking System Co., Ltd. was completed and put into use, meeting the growing market demand."
            ];

            ?>

            <ul class="list-unstyled">
                <?php foreach ($timeline as $year => $description): ?>
                    <li>
                        <h5 class="ts-fs-20 fw-bold text-black">
                            <span class="ts-circle"></span> <?php echo $year; ?>
                        </h5>
                        <p class="mb-05">
                            <?php echo $description; ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
    </section>

    <section class="mb-5" id="product-description-section">
        <h4 class="ts-fs-28"> Ceramic Brake Pads</h4>
        <hr />

        <p>Ceramic brake pads are a type of brake pad, including mineral fibers, aramid fibers, and ceramic fibers.
            Ceramic brake pads are cleaner and quieter, and provide excellent braking performance
            without wearing dual components.</p>
        <div>
            <img class="w-100 mb-06" src="./assets/images/about/a48d2c4c96982c9d60f72505a065d36.jpg"
                class="card-img-top" alt="..." />

            <p class="mb-05">
                was founded in 1996, specializing in the research and development and manufacturing of automotive and
                motorcycle brake pads and brake shoes. The largest R&D and manufacturing enterprise
                for motorcycle brake pads in China, with an annual production total of over 16 million sets. Starting
                from
                2013, we have collaborated with Changsha Central South University and Shanghai East
                China University of Technology in the reform of core technology innovation. Successfully developed a new
                formula for internationally advanced environmentally friendly and high-performance
                soluble ceramic friction materials.
            </p>
        </div>

        <?php
        $brakeFeatures = [
            [
                "title" => "1. In rapid situations, the brakes are sensitive, comfortable, and noiseless",
                "description" => "The friction coefficient is the most important performance indicator of any friction material, which is related to the braking ability of brake pads. During the braking process, due to the heat generated by friction and the increase in working temperature, the friction material of general brake pads is affected by temperature, and the friction coefficient begins to decrease. In practical applications, friction will be reduced, thereby reducing the braking effect. During long-distance driving, SONAI ceramic brake pads always maintain a friction coefficient between 0.45 and 0.55, ensuring that the vehicle has sensitive braking performance. The backing plate's high temperature resistance of SONAI ceramic brake pads eliminates the need to add too many metal materials to increase the heat dissipation capacity of the brake pads. During the braking process, there is no abnormal noise (e.g. scraping sound), avoiding the metal noise caused by friction between traditional metal brake pads and their counterparts (i.e. brake pads and brake discs)."
            ],
            [
                "title" => "2. Extremely strong high-temperature and waterproof performance, fearless of any climbing or wading",
                "description" => "SONAI ceramic brake pads have extremely low thermal decay. At temperatures as high as 500°C, the vehicle still has 94.2% braking performance during normal driving, ensuring good braking performance and safety. SONAI ceramic brake pads have excellent water attenuation properties. Despite being soaked in rain, it still has 95.1% braking performance and the brakes will not slip to ensure safety."
            ],
            [
                "title" => "3. Ceramic formula to protect your car from the pain of injury",
                "description" => "SONAI ceramic brake pads use soft materials such as imported copper/advanced ceramic fibers (non asbestos), which almost do not cause significant wear on the brake discs, overcoming the material defects of traditional brake pads."
            ],
            [
                "title" => "4. Select SONAI brake pads, with a service life of 2-3 times that of the original car",
                "description" => "The SONAI ceramic brake pads use only one to two types of powder containing static electricity as a unique formula material, while the other materials are made of non-static materials. This way, the powder will be carried away by the wind with the movement of the vehicle and will not adhere to the brake discs, affecting their aesthetics. The service life of ceramic brake pads is three times that of the original car. After using ceramic brake pads, there will be no scratches (i.e. scratches) on the brake disc, and the black carbon deposition on the original brake disc caused by using other brake pads will be cleaned, extending the service life of the original brake disc by 20%."
            ],
            [
                "title" => "5. Tested by multiple EU professional institutions such as EMARK, SGS, ENAC, etc",
                "description" => "SONAI ceramic brake pads have passed rigorous testing by multiple EU professional institutions such as EMARK, SGS, ENAC, and are fully compatible to the dual standards of environmental protection and performance of imported brake pads."
            ]
        ];

        ?>

        


        <ul class="list-unstyled">
            <?php foreach ($brakeFeatures as $feature): ?>
                <li class="mb-4">
                    <h5 class="ts-fs-20 fw-bold ts-text-primary">
                        <?php echo $feature['title']; ?>
                    </h5>
                    <p class="mb-05">
                        <?php echo $feature['description']; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>
    <script>
    $(document).ready(function () {
        // Get the URL fragment
        var fragment = window.location.hash;
        
        // Check if a fragment is present and scroll to it
        if (fragment) {
            $('html, body').animate({
                scrollTop: $(fragment).offset().top
            }, 1000); // Adjust the duration as needed
        }
    });
    </script>
            <!-- 新增：烧结刹车片信息 -->
            <h4 class="ts-fs-28"> Sintered Brake Pads</h4>
        <hr />

        <p> Sintered brake pads are a type of inorganic brake pads. They contain copper powder, zinc powder, iron powder and other metal powders. They are made by sintering at high temperature and high pressure with special metallurgical equipment.</p>
        <div>
            <img class="w-100 mb-06" src="./assets/images/about/sintered_brake_pads.jpg" class="card-img-top"
                alt="" />

            <p class="mb-05">
            Sintered brake pads can significantly improve braking performance, but will have a certain impact on the brake disc.
            </p>
        </div>

        <?php
        // 新增：烧结刹车片的特点
        $sinteredBrakeFeatures = [
            [
                "title" => "1. A supplier of production equipment and materials that fully adopts European standards",
                "description" => "Thanks to the in-depth cooperation with the European market, all production raw materials and production equipment are imported from Europe, ensuring the consistency of quality."
            ],
            [
                "title" => "2. At extreme speeds, the brakes will have a strong sense of frustration, which does not seem so comfortable",
                "description" => "The double HH braking performance makes the intervention of SONAI sintered brake pads faster and stronger than other brake pads."
            ],
            [
                "title" => "3. Super high temperature resistance and equally excellent water operation ability",
                "description" => "can withstand harsh working environments up to 800°C without deteriorating braking performance. Ensure the vehicle has good braking performance to ensure safety."
            ],
            [
                "title" => "4. The first choice for large-displacement mainstream large-trade models",
                "description" => "Mainstream large-trade car manufacturers have taken into account the more extreme requirements of these riders for braking performance from the beginning of their design, and have sintered brake pads as standard equipment before leaving the factory."
            ],
            [
                "title" => "5. Passed testing by EMARK, SGS, ENAC and many other EU professional institutions",
                "description" => "It has passed rigorous testing by EMARK, SGS, ENAC and other European professional institutions, and is completely comparable to the indicators of imported sintered brake pads."
            ],
            // 可以根据需要添加更多特点
        ];

        ?>


        <ul class="list-unstyled">
            <?php foreach ($sinteredBrakeFeatures as $feature): ?>
                <li class="mb-4">
                    <h5 class="ts-fs-20 fw-bold ts-text-primary">
                        <?php echo $feature['title']; ?>
                    </h5>
                    <p class="mb-05">
                        <?php echo $feature['description']; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>

</div>
</div>