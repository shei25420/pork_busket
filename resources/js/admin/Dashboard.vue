<template>
    <div class="form-head d-flex mb-3 align-items-start">
        <div class="me-auto d-none d-lg-block">
            <h2 class="text-primary font-w600 mb-0">Dashboard</h2>
            <p class="mb-0">Welcome to The Pork Busket!</p>
        </div>

        <div class="dropdown custom-dropdown">
            <div
                class="btn btn-sm btn-primary light d-flex align-items-center svg-btn"
                data-bs-toggle="dropdown"
            >
                <svg
                    width="28"
                    height="28"
                    viewBox="0 0 28 28"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g>
                        <path
                            d="M22.4281 2.856H21.8681V1.428C21.8681 0.56 21.2801 0 20.4401 0C19.6001 0 19.0121 0.56 19.0121 1.428V2.856H9.71606V1.428C9.71606 0.56 9.15606 0 8.28806 0C7.42006 0 6.86006 0.56 6.86006 1.428V2.856H5.57206C2.85606 2.856 0.560059 5.152 0.560059 7.868V23.016C0.560059 25.732 2.85606 28.028 5.57206 28.028H22.4281C25.1441 28.028 27.4401 25.732 27.4401 23.016V7.868C27.4401 5.152 25.1441 2.856 22.4281 2.856ZM5.57206 5.712H22.4281C23.5761 5.712 24.5841 6.72 24.5841 7.868V9.856H3.41606V7.868C3.41606 6.72 4.42406 5.712 5.57206 5.712ZM22.4281 25.144H5.57206C4.42406 25.144 3.41606 24.136 3.41606 22.988V12.712H24.5561V22.988C24.5841 24.136 23.5761 25.144 22.4281 25.144Z"
                            fill="#2F4CDD"
                        />
                    </g>
                </svg>
                <div class="text-start ms-3">
                    <span class="d-block fs-16">Filter Period</span>
                    <small class="d-block fs-13">4 June 2020 - 4 July 2021</small>
                </div>
                <i class="fa fa-angle-down scale5 ms-3"></i>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">4 June 2020 - 4 July 2021</a>
                <a class="dropdown-item" href="#">5 july 2020 - 4 Aug 2021</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon d-flex">
                        <span class="me-3 bgl-primary text-primary">
                            <!-- <i class="ti-user"></i> -->
                            <svg
                                width="36"
                                height="28"
                                viewBox="0 0 36 28"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M31.75 6.75H30.0064L30.2189 4.62238C30.2709 4.10111 30.2131 3.57473 30.0493 3.07716C29.8854 2.57959 29.6192 2.12186 29.2676 1.73348C28.9161 1.3451 28.4871 1.03468 28.0082 0.822231C27.5294 0.609781 27.0114 0.500013 26.4875 0.5H7.0125C6.48854 0.500041 5.9704 0.609864 5.49148 0.822391C5.01256 1.03492 4.58348 1.34543 4.23189 1.73392C3.88031 2.12241 3.61403 2.58026 3.45021 3.07795C3.28639 3.57564 3.22866 4.10214 3.28075 4.6235L5.2815 24.6224C5.31508 24.9222 5.38467 25.2168 5.48875 25.5H1.75C1.41848 25.5 1.10054 25.6317 0.866116 25.8661C0.631696 26.1005 0.5 26.4185 0.5 26.75C0.5 27.0815 0.631696 27.3995 0.866116 27.6339C1.10054 27.8683 1.41848 28 1.75 28H31.75C32.0815 28 32.3995 27.8683 32.6339 27.6339C32.8683 27.3995 33 27.0815 33 26.75C33 26.4185 32.8683 26.1005 32.6339 25.8661C32.3995 25.6317 32.0815 25.5 31.75 25.5H28.0115C28.1154 25.2172 28.1849 24.9229 28.2185 24.6235L28.881 18H31.75C32.7442 17.9989 33.6974 17.6035 34.4004 16.9004C35.1035 16.1974 35.4989 15.2442 35.5 14.25V10.5C35.4989 9.50577 35.1035 8.55258 34.4004 7.84956C33.6974 7.14653 32.7442 6.75109 31.75 6.75ZM9.0125 25.5C8.70243 25.501 8.40314 25.3862 8.17327 25.1782C7.9434 24.9701 7.79949 24.6836 7.76975 24.375L5.7685 4.37575C5.75109 4.20188 5.7703 4.0263 5.82488 3.86031C5.87946 3.69432 5.96821 3.5416 6.0854 3.412C6.2026 3.28239 6.34564 3.17877 6.50532 3.10781C6.665 3.03685 6.83777 3.00013 7.0125 3H26.4875C26.6622 3.00012 26.8349 3.03681 26.9945 3.10772C27.1541 3.17863 27.2972 3.28218 27.4143 3.4117C27.5315 3.54123 27.6203 3.69386 27.6749 3.85977C27.7295 4.02568 27.7488 4.20119 27.7315 4.375L25.7308 24.3762C25.7007 24.6848 25.5566 24.971 25.3267 25.1788C25.0967 25.3867 24.7975 25.5012 24.4875 25.5H9.0125ZM33 14.25C32.9998 14.5815 32.868 14.8993 32.6337 15.1337C32.3993 15.368 32.0815 15.4998 31.75 15.5H29.1311L29.7561 9.25H31.75C32.0815 9.2502 32.3993 9.38196 32.6337 9.61634C32.868 9.85071 32.9998 10.1685 33 10.5V14.25Z"
                                    fill="#2F4CDD"
                                />
                            </svg>
                        </span>
                        <div class="media-body">
                            <h3 class="mb-0 text-black">
                                <span class="counter ms-0">56</span>
                            </h3>
                            <p class="mb-0">Total Menus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon d-flex">
                        <span class="me-3 bgl-primary text-primary">
                            <!-- <i class="ti-user"></i> -->
                            <svg
                                width="20"
                                height="36"
                                viewBox="0 0 20 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                    fill="#2F4CDD"
                                />
                            </svg>
                        </span>
                        <div class="media-body">
                            <h3 class="mb-0 text-black">
                                <span class="counter ms-0">12</span>k
                            </h3>
                            <p class="mb-0">Total Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon d-flex">
                        <span class="me-3 bgl-primary text-primary">
                            <!-- <i class="ti-user"></i> -->
                            <svg
                                width="32"
                                height="31"
                                viewBox="0 0 32 31"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M4 30.5H22.75C23.7442 30.4989 24.6974 30.1035 25.4004 29.4004C26.1035 28.6974 26.4989 27.7442 26.5 26.75V16.75C26.5 16.4185 26.3683 16.1005 26.1339 15.8661C25.8995 15.6317 25.5815 15.5 25.25 15.5C24.9185 15.5 24.6005 15.6317 24.3661 15.8661C24.1317 16.1005 24 16.4185 24 16.75V26.75C23.9997 27.0814 23.8679 27.3992 23.6336 27.6336C23.3992 27.8679 23.0814 27.9997 22.75 28H4C3.66857 27.9997 3.3508 27.8679 3.11645 27.6336C2.88209 27.3992 2.7503 27.0814 2.75 26.75V9.25C2.7503 8.91857 2.88209 8.6008 3.11645 8.36645C3.3508 8.13209 3.66857 8.0003 4 8H15.25C15.5815 8 15.8995 7.8683 16.1339 7.63388C16.3683 7.39946 16.5 7.08152 16.5 6.75C16.5 6.41848 16.3683 6.10054 16.1339 5.86612C15.8995 5.6317 15.5815 5.5 15.25 5.5H4C3.00577 5.50109 2.05258 5.89653 1.34956 6.59956C0.646531 7.30258 0.251092 8.25577 0.25 9.25V26.75C0.251092 27.7442 0.646531 28.6974 1.34956 29.4004C2.05258 30.1035 3.00577 30.4989 4 30.5Z"
                                    fill="#2F4CDD"
                                />
                                <path
                                    d="M25.25 0.5C24.0139 0.5 22.8055 0.866556 21.7777 1.55331C20.7499 2.24007 19.9488 3.21619 19.4758 4.35823C19.0027 5.50027 18.8789 6.75693 19.1201 7.96931C19.3613 9.1817 19.9565 10.2953 20.8306 11.1694C21.7047 12.0435 22.8183 12.6388 24.0307 12.8799C25.2431 13.1211 26.4997 12.9973 27.6418 12.5242C28.7838 12.0512 29.7599 11.2501 30.4467 10.2223C31.1334 9.19451 31.5 7.98613 31.5 6.75C31.498 5.093 30.8389 3.50442 29.6673 2.33274C28.4956 1.16106 26.907 0.501952 25.25 0.5ZM25.25 10.5C24.5083 10.5 23.7833 10.2801 23.1666 9.86801C22.5499 9.45596 22.0693 8.87029 21.7855 8.18506C21.5016 7.49984 21.4274 6.74584 21.5721 6.01841C21.7167 5.29098 22.0739 4.6228 22.5983 4.09835C23.1228 3.5739 23.791 3.21675 24.5184 3.07206C25.2458 2.92736 25.9998 3.00162 26.6851 3.28545C27.3703 3.56928 27.9559 4.04993 28.368 4.66661C28.7801 5.2833 29 6.00832 29 6.75C28.9989 7.74423 28.6035 8.69742 27.9004 9.40044C27.1974 10.1035 26.2442 10.4989 25.25 10.5Z"
                                    fill="#2F4CDD"
                                />
                                <path
                                    d="M6.5 13H12.75C13.0815 13 13.3995 12.8683 13.6339 12.6339C13.8683 12.3995 14 12.0815 14 11.75C14 11.4185 13.8683 11.1005 13.6339 10.8661C13.3995 10.6317 13.0815 10.5 12.75 10.5H6.5C6.16848 10.5 5.85054 10.6317 5.61612 10.8661C5.3817 11.1005 5.25 11.4185 5.25 11.75C5.25 12.0815 5.3817 12.3995 5.61612 12.6339C5.85054 12.8683 6.16848 13 6.5 13Z"
                                    fill="#2F4CDD"
                                />
                                <path
                                    d="M5.25 16.75C5.25 17.0815 5.3817 17.3995 5.61612 17.6339C5.85054 17.8683 6.16848 18 6.5 18H17.75C18.0815 18 18.3995 17.8683 18.6339 17.6339C18.8683 17.3995 19 17.0815 19 16.75C19 16.4185 18.8683 16.1005 18.6339 15.8661C18.3995 15.6317 18.0815 15.5 17.75 15.5H6.5C6.16848 15.5 5.85054 15.6317 5.61612 15.8661C5.3817 16.1005 5.25 16.4185 5.25 16.75Z"
                                    fill="#2F4CDD"
                                />
                            </svg>
                        </span>
                        <div class="media-body">
                            <h3 class="mb-0 text-black">
                                <span class="counter ms-0">20</span>
                            </h3>
                            <p class="mb-0">Total Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon d-flex">
                        <span class="me-3 bgl-primary text-primary">
                            <!-- <i class="ti-user"></i> -->
                            <svg
                                width="32"
                                height="36"
                                viewBox="0 0 32 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z"
                                    fill="#2F4CDD"
                                />
                                <path
                                    d="M30.78 22.4625C31.1927 21.9098 31.4684 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2096 31.4478 18.5514L30.6543 15.9696C30.2817 14.7451 29.5244 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3287C18.9971 11.75 18.6792 11.8817 18.4448 12.1161C18.2103 12.3505 18.0787 12.6685 18.0787 13C18.0787 13.3315 18.2103 13.6495 18.4448 13.8839C18.6792 14.1183 18.9971 14.25 19.3287 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0073 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.145 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.0961 21.5456C27.8302 21.6799 27.5366 21.7499 27.2388 21.75H15.7777C15.7423 21.75 15.7127 21.7671 15.6777 21.7701C15.5937 21.7669 15.5125 21.75 15.4273 21.75H7.58978C6.20071 21.7449 4.84705 22.1879 3.72972 23.0132C2.61239 23.8385 1.79097 25.0021 1.3874 26.3312L0.454153 29.3625C0.236164 30.0719 0.187639 30.8225 0.31248 31.554C0.43732 32.2856 0.732043 32.9776 1.17296 33.5745C1.61388 34.1715 2.18869 34.6566 2.85119 34.9911C3.51369 35.3255 4.24541 35.4998 4.98753 35.5H18.0287C18.7708 35.4998 19.5026 35.3256 20.1652 34.9912C20.8277 34.6568 21.4026 34.1717 21.8436 33.5747C22.2845 32.9778 22.5793 32.2857 22.7042 31.5541C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5323 24.25H27.2388C27.9283 24.2532 28.6088 24.0928 29.2244 23.7821C29.8399 23.4714 30.3731 23.0191 30.78 22.4625ZM19.8328 32.089C19.6255 32.3726 19.3539 32.6031 19.0403 32.7614C18.7267 32.9198 18.38 33.0015 18.0287 33H4.98753C4.63653 32.9999 4.29043 32.9175 3.97708 32.7594C3.66373 32.6012 3.39187 32.3717 3.18337 32.0894C2.97487 31.807 2.83555 31.4796 2.77661 31.1336C2.71767 30.7876 2.74077 30.4326 2.84403 30.0971L3.77665 27.0661C4.02442 26.2489 4.52925 25.5335 5.21612 25.0261C5.90299 24.5188 6.73523 24.2466 7.58915 24.25H15.4267C16.2806 24.2466 17.1128 24.5188 17.7997 25.0261C18.4865 25.5335 18.9914 26.2489 19.2392 27.0661L20.1718 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1832 31.4804 20.0429 31.8078 19.8328 32.0894V32.089Z"
                                    fill="#2F4CDD"
                                />
                                <path
                                    d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z"
                                    fill="#2F4CDD"
                                />
                            </svg>
                        </span>
                        <div class="media-body">
                            <h3 class="mb-0 text-black">
                                <span class="counter ms-0">65</span>
                            </h3>
                            <p class="mb-0">Total Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-0 pb-0 d-sm-flex flex-wrap d-block">
                    <div class="mb-3">
                        <h4 class="card-title mb-1">Orders Summary</h4>
                        <small class="mb-0">Lorem ipsum dolor sit amet, consectetur</small>
                    </div>
                    <div class="card-action card-tabs mb-2">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    href="#Monthly"
                                    role="tab"
                                    aria-selected="false"
                                >Monthly</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    data-bs-toggle="tab"
                                    href="#Weekly"
                                    role="tab"
                                    aria-selected="true"
                                >Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    href="#Today"
                                    role="tab"
                                    aria-selected="false"
                                >Today</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body tab-content orders-summary pt-3">
                    <div class="tab-pane fade" id="Monthly">
                        <div class="d-flex flex-wrap order-manage p-3 align-items-center mb-4">
                            <a
                                href="javascript:void(0);"
                                class="btn fs-22 text-white py-1 btn-success px-4 me-3"
                            >25</a>
                            <h4 class="mb-0">
                                New Orders
                                <i class="fa fa-circle text-success ms-1 fs-15"></i>
                            </h4>
                            <a href="javascript:void(0);" class="ms-auto text-primary font-w500">
                                Manage orders
                                <i class="ti-angle-right ms-1"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">25</h2>
                                    <p class="fs-16 mb-0">Dine-In</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">60</h2>
                                    <p class="fs-16 mb-0">Takeaway</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">7</h2>
                                    <p class="fs-16 mb-0">Online</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-timeline-icon">
                            <div class="row align-items-center">
                                <div
                                    class="col-xl-3 col-lg-2 col-xxl-4 col-sm-3 col-md-3 my-2 text-center text-sm-left"
                                    style="position: relative;"
                                >
                                    <div
                                        id="chart"
                                        class="d-inline-block"
                                        style="min-height: 116.9px;"
                                    >
                                        <div
                                            id="apexcharts0ow9ffc5"
                                            class="apexcharts-canvas apexcharts0ow9ffc5 apexcharts-theme-light"
                                            style="width: 120px; height: 116.9px;"
                                        >
                                            <svg
                                                id="SvgjsSvg2282"
                                                width="120"
                                                height="116.89999999999999"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g
                                                    id="SvgjsG2284"
                                                    class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)"
                                                >
                                                    <defs id="SvgjsDefs2283">
                                                        <clipPath id="gridRectMask0ow9ffc5">
                                                            <rect
                                                                id="SvgjsRect2286"
                                                                width="126"
                                                                height="122"
                                                                x="-3"
                                                                y="-1"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask0ow9ffc5">
                                                            <rect
                                                                id="SvgjsRect2287"
                                                                width="124"
                                                                height="124"
                                                                x="-2"
                                                                y="-2"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG2288" class="apexcharts-pie">
                                                        <g
                                                            id="SvgjsG2289"
                                                            transform="translate(0, 0) scale(1)"
                                                        >
                                                            <circle
                                                                id="SvgjsCircle2290"
                                                                r="28.26829268292683"
                                                                cx="60"
                                                                cy="60"
                                                                fill="transparent"
                                                            />
                                                            <g
                                                                id="SvgjsG2291"
                                                                class="apexcharts-slices"
                                                            >
                                                                <g
                                                                    id="SvgjsG2292"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx1"
                                                                    rel="1"
                                                                    data-:real-index="0"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2293"
                                                                        d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        fill="rgba(255,92,90,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                        index="0"
                                                                        j="0"
                                                                        data-:angle="162"
                                                                        data-:start-angle="0"
                                                                        data-:stroke-width="2"
                                                                        data-:value="45"
                                                                        data-:path-orig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2294"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx2"
                                                                    rel="2"
                                                                    data-:real-index="1"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2295"
                                                                        d="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z"
                                                                        fill="rgba(43,193,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                        index="0"
                                                                        j="1"
                                                                        data-:angle="126"
                                                                        data-:start-angle="162"
                                                                        data-:stroke-width="2"
                                                                        data-:value="35"
                                                                        data-:path-orig="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2296"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx3"
                                                                    rel="3"
                                                                    data-:real-index="2"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2297"
                                                                        d="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z"
                                                                        fill="rgba(64,74,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                        index="0"
                                                                        j="2"
                                                                        data-:angle="72"
                                                                        data-:start-angle="288"
                                                                        data-:stroke-width="2"
                                                                        data-:value="20"
                                                                        data-:path-orig="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line
                                                        id="SvgjsLine2298"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="0"
                                                        stroke-width="1"
                                                        class="apexcharts-ycrosshairs"
                                                    />
                                                    <line
                                                        id="SvgjsLine2299"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke-dasharray="0"
                                                        stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"
                                                    />
                                                </g>
                                                <g id="SvgjsG2285" class="apexcharts-annotations" />
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 92, 90);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(43, 193, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(64, 74, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 181px; height: 138px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Dine-In (24%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-warning progress-animated"
                                                style="width:85%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >25</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Takeaway (41%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-success progress-animated"
                                                style="width:70%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >60</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Online (15%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-dark progress-animated"
                                                style="width:30%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >07</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="Weekly">
                        <div class="d-flex flex-wrap order-manage p-3 align-items-center mb-4">
                            <a
                                href="javascript:void(0);"
                                class="btn fs-22 py-1 btn-success px-4 me-3"
                            >25</a>
                            <h4 class="mb-0">
                                New Orders
                                <i class="fa fa-circle text-success ms-1 fs-15"></i>
                            </h4>
                            <a href="javascript:void(0);" class="ms-auto text-primary font-w500">
                                Manage orders
                                <i class="ti-angle-right ms-1"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">25</h2>
                                    <p class="fs-16 mb-0">Dine-In</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">60</h2>
                                    <p class="fs-16 mb-0">Takeaway</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">7</h2>
                                    <p class="fs-16 mb-0">Online</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-timeline-icon">
                            <div class="row align-items-center">
                                <div
                                    class="col-xl-3 col-lg-2 col-xxl-4 col-sm-3 col-md-3 my-2 text-center text-sm-left"
                                    style="position: relative;"
                                >
                                    <div
                                        id="chart2"
                                        class="d-inline-block"
                                        style="min-height: 116.9px;"
                                    >
                                        <div
                                            id="apexchartsoasrzzn5"
                                            class="apexcharts-canvas apexchartsoasrzzn5 apexcharts-theme-light"
                                            style="width: 120px; height: 116.9px;"
                                        >
                                            <svg
                                                id="SvgjsSvg2300"
                                                width="120"
                                                height="116.89999999999999"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g
                                                    id="SvgjsG2302"
                                                    class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)"
                                                >
                                                    <defs id="SvgjsDefs2301">
                                                        <clipPath id="gridRectMaskoasrzzn5">
                                                            <rect
                                                                id="SvgjsRect2304"
                                                                width="126"
                                                                height="122"
                                                                x="-3"
                                                                y="-1"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskoasrzzn5">
                                                            <rect
                                                                id="SvgjsRect2305"
                                                                width="124"
                                                                height="124"
                                                                x="-2"
                                                                y="-2"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG2306" class="apexcharts-pie">
                                                        <g
                                                            id="SvgjsG2307"
                                                            transform="translate(0, 0) scale(1)"
                                                        >
                                                            <circle
                                                                id="SvgjsCircle2308"
                                                                r="28.26829268292683"
                                                                cx="60"
                                                                cy="60"
                                                                fill="transparent"
                                                            />
                                                            <g
                                                                id="SvgjsG2309"
                                                                class="apexcharts-slices"
                                                            >
                                                                <g
                                                                    id="SvgjsG2310"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx1"
                                                                    rel="1"
                                                                    data-:real-index="0"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2311"
                                                                        d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        fill="rgba(255,92,90,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                        index="0"
                                                                        j="0"
                                                                        data-:angle="162"
                                                                        data-:start-angle="0"
                                                                        data-:stroke-width="2"
                                                                        data-:value="45"
                                                                        data-:path-orig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2312"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx2"
                                                                    rel="2"
                                                                    data-:real-index="1"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2313"
                                                                        d="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 77.47076568197875 L 33.11525603936383 68.73538284098937 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z"
                                                                        fill="rgba(43,193,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                        index="0"
                                                                        j="1"
                                                                        data-:angle="90"
                                                                        data-:start-angle="162"
                                                                        data-:stroke-width="2"
                                                                        data-:value="25"
                                                                        data-:path-orig="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 77.47076568197875 L 33.11525603936383 68.73538284098937 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2314"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx3"
                                                                    rel="3"
                                                                    data-:real-index="2"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2315"
                                                                        d="M 6.2305120787276564 77.47076568197875 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 68.73538284098937 L 6.2305120787276564 77.47076568197875 z"
                                                                        fill="rgba(64,74,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                        index="0"
                                                                        j="2"
                                                                        data-:angle="108"
                                                                        data-:start-angle="252"
                                                                        data-:stroke-width="2"
                                                                        data-:value="30"
                                                                        data-:path-orig="M 6.2305120787276564 77.47076568197875 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 68.73538284098937 L 6.2305120787276564 77.47076568197875 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line
                                                        id="SvgjsLine2316"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="0"
                                                        stroke-width="1"
                                                        class="apexcharts-ycrosshairs"
                                                    />
                                                    <line
                                                        id="SvgjsLine2317"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke-dasharray="0"
                                                        stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"
                                                    />
                                                </g>
                                                <g id="SvgjsG2303" class="apexcharts-annotations" />
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 92, 90);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(43, 193, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(64, 74, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 196px; height: 118px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Dine-In (24%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-warning progress-animated"
                                                style="width:85%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >25</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Takeaway (41%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-success progress-animated"
                                                style="width:70%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >60</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Online (15%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-dark progress-animated"
                                                style="width:30%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >07</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Today">
                        <div class="d-flex flex-wrap order-manage p-3 align-items-center mb-4">
                            <a
                                href="javascript:void(0);"
                                class="btn fs-22 py-1 btn-success px-4 me-3"
                            >25</a>
                            <h4 class="mb-0">
                                New Orders
                                <i class="fa fa-circle text-success ms-1 fs-15"></i>
                            </h4>
                            <a href="javascript:void(0);" class="ms-auto text-primary font-w500">
                                Manage orders
                                <i class="ti-angle-right ms-1"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">25</h2>
                                    <p class="fs-16 mb-0">Dine-In</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">60</h2>
                                    <p class="fs-16 mb-0">Takeaway</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="border px-3 py-3 rounded-xl">
                                    <h2 class="fs-32 font-w600 counter">7</h2>
                                    <p class="fs-16 mb-0">Online</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-timeline-icon">
                            <div class="row align-items-center">
                                <div
                                    class="col-xl-3 col-lg-2 col-xxl-4 col-sm-3 col-md-3 my-2 text-center text-sm-left"
                                    style="position: relative;"
                                >
                                    <div
                                        id="chart3"
                                        class="d-inline-block"
                                        style="min-height: 116.9px;"
                                    >
                                        <div
                                            id="apexchartsf8qax9li"
                                            class="apexcharts-canvas apexchartsf8qax9li apexcharts-theme-light"
                                            style="width: 120px; height: 116.9px;"
                                        >
                                            <svg
                                                id="SvgjsSvg2318"
                                                width="120"
                                                height="116.89999999999999"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g
                                                    id="SvgjsG2320"
                                                    class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)"
                                                >
                                                    <defs id="SvgjsDefs2319">
                                                        <clipPath id="gridRectMaskf8qax9li">
                                                            <rect
                                                                id="SvgjsRect2322"
                                                                width="126"
                                                                height="122"
                                                                x="-3"
                                                                y="-1"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskf8qax9li">
                                                            <rect
                                                                id="SvgjsRect2323"
                                                                width="124"
                                                                height="124"
                                                                x="-2"
                                                                y="-2"
                                                                rx="0"
                                                                ry="0"
                                                                opacity="1"
                                                                stroke-width="0"
                                                                stroke="none"
                                                                stroke-dasharray="0"
                                                                fill="#fff"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG2324" class="apexcharts-pie">
                                                        <g
                                                            id="SvgjsG2325"
                                                            transform="translate(0, 0) scale(1)"
                                                        >
                                                            <circle
                                                                id="SvgjsCircle2326"
                                                                r="28.26829268292683"
                                                                cx="60"
                                                                cy="60"
                                                                fill="transparent"
                                                            />
                                                            <g
                                                                id="SvgjsG2327"
                                                                class="apexcharts-slices"
                                                            >
                                                                <g
                                                                    id="SvgjsG2328"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx1"
                                                                    rel="1"
                                                                    data-:real-index="0"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2329"
                                                                        d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 105.73905836490556 93.23137109302324 L 82.86952918245278 76.61568554651163 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        fill="rgba(255,92,90,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                        index="0"
                                                                        j="0"
                                                                        data-:angle="126"
                                                                        data-:start-angle="0"
                                                                        data-:stroke-width="2"
                                                                        data-:value="35"
                                                                        data-:path-orig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 105.73905836490556 93.23137109302324 L 82.86952918245278 76.61568554651163 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2330"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx2"
                                                                    rel="2"
                                                                    data-:real-index="1"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2331"
                                                                        d="M 105.73905836490556 93.23137109302324 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 82.86952918245278 76.61568554651163 L 105.73905836490556 93.23137109302324 z"
                                                                        fill="rgba(43,193,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                        index="0"
                                                                        j="1"
                                                                        data-:angle="162"
                                                                        data-:start-angle="126"
                                                                        data-:stroke-width="2"
                                                                        data-:value="45"
                                                                        data-:path-orig="M 105.73905836490556 93.23137109302324 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 82.86952918245278 76.61568554651163 L 105.73905836490556 93.23137109302324 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                                <g
                                                                    id="SvgjsG2332"
                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                    seriesName="seriesx3"
                                                                    rel="3"
                                                                    data-:real-index="2"
                                                                >
                                                                    <path
                                                                        id="SvgjsPath2333"
                                                                        d="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z"
                                                                        fill="rgba(64,74,86,1)"
                                                                        fill-opacity="1"
                                                                        stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                        index="0"
                                                                        j="2"
                                                                        data-:angle="72"
                                                                        data-:start-angle="288"
                                                                        data-:stroke-width="2"
                                                                        data-:value="20"
                                                                        data-:path-orig="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z"
                                                                        stroke="#ffffff"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line
                                                        id="SvgjsLine2334"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="0"
                                                        stroke-width="1"
                                                        class="apexcharts-ycrosshairs"
                                                    />
                                                    <line
                                                        id="SvgjsLine2335"
                                                        x1="0"
                                                        y1="0"
                                                        x2="120"
                                                        y2="0"
                                                        stroke-dasharray="0"
                                                        stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"
                                                    />
                                                </g>
                                                <g id="SvgjsG2321" class="apexcharts-annotations" />
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 92, 90);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(43, 193, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(64, 74, 86);"
                                                    ></span>
                                                    <div
                                                        class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                                    >
                                                        <div class="apexcharts-tooltip-y-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-value"
                                                            ></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group">
                                                            <span
                                                                class="apexcharts-tooltip-text-z-label"
                                                            ></span>
                                                            <span
                                                                class="apexcharts-tooltip-text-z-value"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 181px; height: 138px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Dine-In (24%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-warning progress-animated"
                                                style="width:85%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >25</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <p
                                            class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0"
                                        >Takeaway (41%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-success progress-animated"
                                                style="width:70%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >60</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Online (15%)</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div
                                                class="progress-bar bg-dark progress-animated"
                                                style="width:30%; height:8px;"
                                                role="progressbar"
                                            >
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span
                                            class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right"
                                        >07</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-0 pb-0 d-sm-flex d-block">
                    <div>
                        <h4 class="card-title mb-1">Revenue</h4>
                        <small class="mb-0">Lorem ipsum dolor sit amet, consectetur</small>
                    </div>
                    <div
                        class="dropdown bootstrap-select form-control style-1 default-select mt-3 mt-sm-0"
                    >
                        <select
                            class="form-control style-1 default-select mt-3 mt-sm-0"
                            tabindex="null"
                        >
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Daily</option>
                        </select>
                        <button
                            type="button"
                            tabindex="-1"
                            class="btn dropdown-toggle btn-light"
                            data-bs-toggle="dropdown"
                            role="combobox"
                            aria-owns="bs-select-1"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                            title="Weekly"
                        >
                            <div class="filter-option">
                                <div class="filter-option-inner">
                                    <div class="filter-option-inner-inner">Weekly</div>
                                </div>
                            </div>
                        </button>
                        <div
                            class="dropdown-menu"
                            style="max-height: 694.875px; overflow: hidden; min-height: 0px;"
                        >
                            <div
                                class="inner show"
                                role="listbox"
                                id="bs-select-1"
                                tabindex="-1"
                                aria-activedescendant="bs-select-1-1"
                                style="max-height: 678.875px; overflow-y: auto; min-height: 0px;"
                            >
                                <ul
                                    class="dropdown-menu inner show"
                                    role="presentation"
                                    style="margin-top: 0px; margin-bottom: 0px;"
                                >
                                    <li class>
                                        <a
                                            role="option"
                                            class="dropdown-item"
                                            id="bs-select-1-0"
                                            tabindex="0"
                                            aria-setsize="3"
                                            aria-posinset="1"
                                        >
                                            <span class="text">Monthly</span>
                                        </a>
                                    </li>
                                    <li class="selected active">
                                        <a
                                            role="option"
                                            class="dropdown-item active selected"
                                            id="bs-select-1-1"
                                            tabindex="0"
                                            aria-setsize="3"
                                            aria-posinset="2"
                                            aria-selected="true"
                                        >
                                            <span class="text">Weekly</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            role="option"
                                            class="dropdown-item"
                                            id="bs-select-1-2"
                                            tabindex="0"
                                        >
                                            <span class="text">Daily</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body revenue-chart px-3" style="position: relative;">
                    <div
                        class="d-flex flex-wrap justify-content-end pe-3 pull-right revenue-chart-bar"
                    >
                        <div class="d-flex align-items-end me-4 mb-2">
                            <img
                                src="images/svg/ic_stat2.svg"
                                height="22"
                                width="22"
                                class="me-2 mb-1"
                                alt
                            />
                            <div>
                                <small class="text-dark fs-14">Income</small>
                                <h3 class="font-w600 mb-0">
                                    ksh
                                    <span class="counter">41,512</span>k
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mb-2">
                            <img
                                src="images/svg/ic_stat1.svg"
                                height="22"
                                width="22"
                                class="me-2 mb-1"
                                alt
                            />
                            <div>
                                <small class="text-dark fs-14">Expense</small>
                                <h3 class="font-w600 mb-0">
                                    ksh
                                    <span class="counter">41,512</span>k
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div id="chartBar" style="min-height: 365px;">
                        <div
                            id="apexchartsc1vwx7rd"
                            class="apexcharts-canvas apexchartsc1vwx7rd apexcharts-theme-light"
                            style="width: 779px; height: 350px;"
                        >
                            <svg
                                id="SvgjsSvg2338"
                                width="779"
                                height="350"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg apexcharts-zoomable"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: transparent;"
                            >
                                <foreignObject x="0" y="0" width="779" height="350">
                                    <div
                                        class="apexcharts-legend apexcharts-align-left position-top"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="right: 0px; position: absolute; left: 0px; top: 4px;"
                                    >
                                        <div
                                            class="apexcharts-legend-series"
                                            rel="1"
                                            data-:collapsed="false"
                                            style="margin: 2px 5px;"
                                        >
                                            <span
                                                class="apexcharts-legend-marker"
                                                rel="1"
                                                data-:collapsed="false"
                                                style="background: rgb(47, 76, 221); color: rgb(47, 76, 221); height: 19px; width: 19px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 4px;"
                                            />
                                            <span
                                                class="apexcharts-legend-text"
                                                rel="1"
                                                i="0"
                                                data:default-text="Net%20Profit"
                                                data-:collapsed="false"
                                                style="color: rgb(0, 0, 0); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                            >Net Profit</span>
                                        </div>
                                        <div
                                            class="apexcharts-legend-series"
                                            rel="2"
                                            data-:collapsed="false"
                                            style="margin: 2px 5px;"
                                        >
                                            <span
                                                class="apexcharts-legend-marker"
                                                rel="2"
                                                data-:collapsed="false"
                                                style="background: rgb(181, 25, 236); color: rgb(181, 25, 236); height: 19px; width: 19px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 4px;"
                                            />
                                            <span
                                                class="apexcharts-legend-text"
                                                rel="2"
                                                i="1"
                                                data:default-text="Revenue"
                                                data-:collapsed="false"
                                                style="color: rgb(0, 0, 0); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                            >Revenue</span>
                                        </div>
                                    </div>
                                </foreignObject>
                                <g
                                    id="SvgjsG2340"
                                    class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(48.703125, 81)"
                                >
                                    <defs id="SvgjsDefs2339">
                                        <clipPath id="gridRectMaskc1vwx7rd">
                                            <rect
                                                id="SvgjsRect2344"
                                                width="716.8125"
                                                height="233.73000000000002"
                                                x="-4"
                                                y="-2"
                                                rx="0"
                                                ry="0"
                                                opacity="1"
                                                stroke-width="0"
                                                stroke="none"
                                                stroke-dasharray="0"
                                                fill="#fff"
                                            />
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaskc1vwx7rd">
                                            <rect
                                                id="SvgjsRect2345"
                                                width="712.8125"
                                                height="233.73000000000002"
                                                x="-2"
                                                y="-2"
                                                rx="0"
                                                ry="0"
                                                opacity="1"
                                                stroke-width="0"
                                                stroke="none"
                                                stroke-dasharray="0"
                                                fill="#fff"
                                            />
                                        </clipPath>
                                        <linearGradient
                                            id="SvgjsLinearGradient2350"
                                            x1="0"
                                            y1="0"
                                            x2="0"
                                            y2="1"
                                        >
                                            <stop
                                                id="SvgjsStop2351"
                                                stop-opacity="0.65"
                                                stop-color="rgba(47,76,221,0.65)"
                                                offset="0"
                                            />
                                            <stop
                                                id="SvgjsStop2352"
                                                stop-opacity="0.5"
                                                stop-color="rgba(151,166,238,0.5)"
                                                offset="1"
                                            />
                                            <stop
                                                id="SvgjsStop2353"
                                                stop-opacity="0.5"
                                                stop-color="rgba(151,166,238,0.5)"
                                                offset="1"
                                            />
                                        </linearGradient>
                                        <linearGradient
                                            id="SvgjsLinearGradient2359"
                                            x1="0"
                                            y1="0"
                                            x2="0"
                                            y2="1"
                                        >
                                            <stop
                                                id="SvgjsStop2360"
                                                stop-opacity="0.65"
                                                stop-color="rgba(181,25,236,0.65)"
                                                offset="0"
                                            />
                                            <stop
                                                id="SvgjsStop2361"
                                                stop-opacity="0.5"
                                                stop-color="rgba(218,140,246,0.5)"
                                                offset="1"
                                            />
                                            <stop
                                                id="SvgjsStop2362"
                                                stop-opacity="0.5"
                                                stop-color="rgba(218,140,246,0.5)"
                                                offset="1"
                                            />
                                        </linearGradient>
                                    </defs>
                                    <g
                                        id="SvgjsG2365"
                                        class="apexcharts-xaxis"
                                        transform="translate(0, 0)"
                                    >
                                        <g
                                            id="SvgjsG2366"
                                            class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"
                                        >
                                            <text
                                                id="SvgjsText2368"
                                                font-family="Poppins"
                                                x="0"
                                                y="258.73"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="13px"
                                                font-weight="100"
                                                fill="#3e4954"
                                                class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                                style="font-family: Poppins;"
                                            >
                                                <tspan id="SvgjsTspan2369">Apr</tspan>
                                                <title>Apr</title>
                                            </text>
                                            <text
                                                id="SvgjsText2371"
                                                font-family="Poppins"
                                                x="354.40625"
                                                y="258.73"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="13px"
                                                font-weight="100"
                                                fill="#3e4954"
                                                class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                                style="font-family: Poppins;"
                                            >
                                                <tspan id="SvgjsTspan2372">May</tspan>
                                                <title>May</title>
                                            </text>
                                            <text
                                                id="SvgjsText2374"
                                                font-family="Poppins"
                                                x="708.8125"
                                                y="258.73"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="13px"
                                                font-weight="100"
                                                fill="#3e4954"
                                                class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label"
                                                style="font-family: Poppins;"
                                            >
                                                <tspan id="SvgjsTspan2375">Jun</tspan>
                                                <title>Jun</title>
                                            </text>
                                        </g>
                                        <line
                                            id="SvgjsLine2376"
                                            x1="0"
                                            y1="230.73000000000002"
                                            x2="708.8125"
                                            y2="230.73000000000002"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-width="1"
                                        />
                                    </g>
                                    <g id="SvgjsG2389" class="apexcharts-grid">
                                        <g id="SvgjsG2390" class="apexcharts-gridlines-horizontal">
                                            <line
                                                id="SvgjsLine2395"
                                                x1="0"
                                                y1="0"
                                                x2="708.8125"
                                                y2="0"
                                                stroke="#eeeeee"
                                                stroke-dasharray="0"
                                                class="apexcharts-gridline"
                                            />
                                            <line
                                                id="SvgjsLine2396"
                                                x1="0"
                                                y1="57.432500000000005"
                                                x2="708.8125"
                                                y2="57.432500000000005"
                                                stroke="#eeeeee"
                                                stroke-dasharray="0"
                                                class="apexcharts-gridline"
                                            />
                                            <line
                                                id="SvgjsLine2397"
                                                x1="0"
                                                y1="114.86500000000001"
                                                x2="708.8125"
                                                y2="114.86500000000001"
                                                stroke="#eeeeee"
                                                stroke-dasharray="0"
                                                class="apexcharts-gridline"
                                            />
                                            <line
                                                id="SvgjsLine2398"
                                                x1="0"
                                                y1="172.2975"
                                                x2="708.8125"
                                                y2="172.2975"
                                                stroke="#eeeeee"
                                                stroke-dasharray="0"
                                                class="apexcharts-gridline"
                                            />
                                            <line
                                                id="SvgjsLine2399"
                                                x1="0"
                                                y1="229.73000000000002"
                                                x2="708.8125"
                                                y2="229.73000000000002"
                                                stroke="#eeeeee"
                                                stroke-dasharray="0"
                                                class="apexcharts-gridline"
                                            />
                                        </g>
                                        <g id="SvgjsG2391" class="apexcharts-gridlines-vertical" />
                                        <line
                                            id="SvgjsLine2392"
                                            x1="0"
                                            y1="230.73000000000002"
                                            x2="0"
                                            y2="236.73000000000002"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"
                                        />
                                        <line
                                            id="SvgjsLine2393"
                                            x1="354.40625"
                                            y1="230.73000000000002"
                                            x2="354.40625"
                                            y2="236.73000000000002"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"
                                        />
                                        <line
                                            id="SvgjsLine2394"
                                            x1="708.8125"
                                            y1="230.73000000000002"
                                            x2="708.8125"
                                            y2="236.73000000000002"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"
                                        />
                                        <line
                                            id="SvgjsLine2401"
                                            x1="0"
                                            y1="229.73000000000002"
                                            x2="708.8125"
                                            y2="229.73000000000002"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                        />
                                        <line
                                            id="SvgjsLine2400"
                                            x1="0"
                                            y1="1"
                                            x2="0"
                                            y2="229.73000000000002"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                        />
                                    </g>
                                    <g
                                        id="SvgjsG2346"
                                        class="apexcharts-area-series apexcharts-plot-series"
                                    >
                                        <g
                                            id="SvgjsG2347"
                                            class="apexcharts-series"
                                            seriesName="NetxProfit"
                                            data-:longest-series="true"
                                            rel="1"
                                            data-:real-index="0"
                                        >
                                            <path
                                                id="SvgjsPath2354"
                                                d="M -1063.21875 229.73000000000002L -1063.21875 170.38308333333333C -939.1765625 170.38308333333333 -832.8546875 153.15333333333334 -708.8125 153.15333333333334C -584.7703125 153.15333333333334 -478.4484375 176.12633333333335 -354.40625 176.12633333333335C -230.3640625 176.12633333333335 -124.0421875 132.09475 0 132.09475C 124.0421875 132.09475 230.3640625 149.3245 354.40625 149.3245C 478.4484375 149.3245 584.7703125 21.05858333333333 708.8125 21.05858333333333C 832.8546875 21.05858333333333 939.1765625 38.28833333333333 1063.21875 38.28833333333333C 1063.21875 38.28833333333333 1063.21875 38.28833333333333 1063.21875 229.73000000000002M 1063.21875 38.28833333333333z"
                                                fill="url(#SvgjsLinearGradient2350)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="butt"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskc1vwx7rd)"
                                                pathTo="M -1063.21875 229.73000000000002L -1063.21875 170.38308333333333C -939.1765625 170.38308333333333 -832.8546875 153.15333333333334 -708.8125 153.15333333333334C -584.7703125 153.15333333333334 -478.4484375 176.12633333333335 -354.40625 176.12633333333335C -230.3640625 176.12633333333335 -124.0421875 132.09475 0 132.09475C 124.0421875 132.09475 230.3640625 149.3245 354.40625 149.3245C 478.4484375 149.3245 584.7703125 21.05858333333333 708.8125 21.05858333333333C 832.8546875 21.05858333333333 939.1765625 38.28833333333333 1063.21875 38.28833333333333C 1063.21875 38.28833333333333 1063.21875 38.28833333333333 1063.21875 229.73000000000002M 1063.21875 38.28833333333333z"
                                                pathFrom="M 0 229.73000000000002L 0 170.38308333333333C 37.59512125651041 170.38308333333333 69.81951090494792 153.15333333333334 107.41463216145833 153.15333333333334C 145.00975341796874 153.15333333333334 177.23414306640626 176.12633333333335 214.82926432291666 176.12633333333335C 252.42438557942708 176.12633333333335 284.6487752278646 132.09475 322.243896484375 132.09475C 359.8390177408854 132.09475 392.0634073893229 149.3245 429.6585286458333 149.3245C 467.25364990234374 149.3245 499.4780395507812 21.05858333333333 537.0731608072916 21.05858333333333C 574.668282063802 21.05858333333333 606.8926717122396 38.28833333333333 644.48779296875 38.28833333333333C 644.48779296875 38.28833333333333 644.48779296875 38.28833333333333 644.48779296875 229.73000000000002M 644.48779296875 38.28833333333333z"
                                            />
                                            <path
                                                id="SvgjsPath2355"
                                                d="M -1063.21875 170.38308333333333C -939.1765625 170.38308333333333 -832.8546875 153.15333333333334 -708.8125 153.15333333333334C -584.7703125 153.15333333333334 -478.4484375 176.12633333333335 -354.40625 176.12633333333335C -230.3640625 176.12633333333335 -124.0421875 132.09475 0 132.09475C 124.0421875 132.09475 230.3640625 149.3245 354.40625 149.3245C 478.4484375 149.3245 584.7703125 21.05858333333333 708.8125 21.05858333333333C 832.8546875 21.05858333333333 939.1765625 38.28833333333333 1063.21875 38.28833333333333"
                                                fill="none"
                                                fill-opacity="1"
                                                stroke="#2f4cdd"
                                                stroke-opacity="1"
                                                stroke-linecap="butt"
                                                stroke-width="4"
                                                stroke-dasharray="0"
                                                class="apexcharts-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskc1vwx7rd)"
                                                pathTo="M -1063.21875 170.38308333333333C -939.1765625 170.38308333333333 -832.8546875 153.15333333333334 -708.8125 153.15333333333334C -584.7703125 153.15333333333334 -478.4484375 176.12633333333335 -354.40625 176.12633333333335C -230.3640625 176.12633333333335 -124.0421875 132.09475 0 132.09475C 124.0421875 132.09475 230.3640625 149.3245 354.40625 149.3245C 478.4484375 149.3245 584.7703125 21.05858333333333 708.8125 21.05858333333333C 832.8546875 21.05858333333333 939.1765625 38.28833333333333 1063.21875 38.28833333333333"
                                                pathFrom="M 0 170.38308333333333C 37.59512125651041 170.38308333333333 69.81951090494792 153.15333333333334 107.41463216145833 153.15333333333334C 145.00975341796874 153.15333333333334 177.23414306640626 176.12633333333335 214.82926432291666 176.12633333333335C 252.42438557942708 176.12633333333335 284.6487752278646 132.09475 322.243896484375 132.09475C 359.8390177408854 132.09475 392.0634073893229 149.3245 429.6585286458333 149.3245C 467.25364990234374 149.3245 499.4780395507812 21.05858333333333 537.0731608072916 21.05858333333333C 574.668282063802 21.05858333333333 606.8926717122396 38.28833333333333 644.48779296875 38.28833333333333"
                                            />
                                            <g
                                                id="SvgjsG2348"
                                                class="apexcharts-series-markers-wrap"
                                                data-:real-index="0"
                                            >
                                                <g class="apexcharts-series-markers">
                                                    <circle
                                                        id="SvgjsCircle2407"
                                                        r="0"
                                                        cx="354.40625"
                                                        cy="149.3245"
                                                        class="apexcharts-marker wrwlmi9n8 no-pointer-events"
                                                        stroke="#ffffff"
                                                        fill="#2f4cdd"
                                                        fill-opacity="1"
                                                        stroke-width="2"
                                                        stroke-opacity="0.9"
                                                        default-marker-size="0"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <g
                                            id="SvgjsG2356"
                                            class="apexcharts-series"
                                            seriesName="Revenue"
                                            data-:longest-series="true"
                                            rel="2"
                                            data-:real-index="1"
                                        >
                                            <path
                                                id="SvgjsPath2363"
                                                d="M -1063.21875 229.73000000000002L -1063.21875 208.6714166666667C -939.1765625 208.6714166666667 -832.8546875 168.46866666666668 -708.8125 168.46866666666668C -584.7703125 168.46866666666668 -478.4484375 143.58125 -354.40625 143.58125C -230.3640625 143.58125 -124.0421875 168.46866666666668 0 168.46866666666668C 124.0421875 168.46866666666668 230.3640625 164.63983333333334 354.40625 164.63983333333334C 478.4484375 164.63983333333334 584.7703125 130.18033333333335 708.8125 130.18033333333335C 832.8546875 130.18033333333335 939.1765625 151.23891666666668 1063.21875 151.23891666666668C 1063.21875 151.23891666666668 1063.21875 151.23891666666668 1063.21875 229.73000000000002M 1063.21875 151.23891666666668z"
                                                fill="url(#SvgjsLinearGradient2359)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="butt"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-area"
                                                index="1"
                                                clip-path="url(#gridRectMaskc1vwx7rd)"
                                                pathTo="M -1063.21875 229.73000000000002L -1063.21875 208.6714166666667C -939.1765625 208.6714166666667 -832.8546875 168.46866666666668 -708.8125 168.46866666666668C -584.7703125 168.46866666666668 -478.4484375 143.58125 -354.40625 143.58125C -230.3640625 143.58125 -124.0421875 168.46866666666668 0 168.46866666666668C 124.0421875 168.46866666666668 230.3640625 164.63983333333334 354.40625 164.63983333333334C 478.4484375 164.63983333333334 584.7703125 130.18033333333335 708.8125 130.18033333333335C 832.8546875 130.18033333333335 939.1765625 151.23891666666668 1063.21875 151.23891666666668C 1063.21875 151.23891666666668 1063.21875 151.23891666666668 1063.21875 229.73000000000002M 1063.21875 151.23891666666668z"
                                                pathFrom="M 0 229.73000000000002L 0 208.6714166666667C 37.59512125651041 208.6714166666667 69.81951090494792 168.46866666666668 107.41463216145833 168.46866666666668C 145.00975341796874 168.46866666666668 177.23414306640626 143.58125 214.82926432291666 143.58125C 252.42438557942708 143.58125 284.6487752278646 168.46866666666668 322.243896484375 168.46866666666668C 359.8390177408854 168.46866666666668 392.0634073893229 164.63983333333334 429.6585286458333 164.63983333333334C 467.25364990234374 164.63983333333334 499.4780395507812 130.18033333333335 537.0731608072916 130.18033333333335C 574.668282063802 130.18033333333335 606.8926717122396 151.23891666666668 644.48779296875 151.23891666666668C 644.48779296875 151.23891666666668 644.48779296875 151.23891666666668 644.48779296875 229.73000000000002M 644.48779296875 151.23891666666668z"
                                            />
                                            <path
                                                id="SvgjsPath2364"
                                                d="M -1063.21875 208.6714166666667C -939.1765625 208.6714166666667 -832.8546875 168.46866666666668 -708.8125 168.46866666666668C -584.7703125 168.46866666666668 -478.4484375 143.58125 -354.40625 143.58125C -230.3640625 143.58125 -124.0421875 168.46866666666668 0 168.46866666666668C 124.0421875 168.46866666666668 230.3640625 164.63983333333334 354.40625 164.63983333333334C 478.4484375 164.63983333333334 584.7703125 130.18033333333335 708.8125 130.18033333333335C 832.8546875 130.18033333333335 939.1765625 151.23891666666668 1063.21875 151.23891666666668"
                                                fill="none"
                                                fill-opacity="1"
                                                stroke="#b519ec"
                                                stroke-opacity="1"
                                                stroke-linecap="butt"
                                                stroke-width="4"
                                                stroke-dasharray="0"
                                                class="apexcharts-area"
                                                index="1"
                                                clip-path="url(#gridRectMaskc1vwx7rd)"
                                                pathTo="M -1063.21875 208.6714166666667C -939.1765625 208.6714166666667 -832.8546875 168.46866666666668 -708.8125 168.46866666666668C -584.7703125 168.46866666666668 -478.4484375 143.58125 -354.40625 143.58125C -230.3640625 143.58125 -124.0421875 168.46866666666668 0 168.46866666666668C 124.0421875 168.46866666666668 230.3640625 164.63983333333334 354.40625 164.63983333333334C 478.4484375 164.63983333333334 584.7703125 130.18033333333335 708.8125 130.18033333333335C 832.8546875 130.18033333333335 939.1765625 151.23891666666668 1063.21875 151.23891666666668"
                                                pathFrom="M 0 208.6714166666667C 37.59512125651041 208.6714166666667 69.81951090494792 168.46866666666668 107.41463216145833 168.46866666666668C 145.00975341796874 168.46866666666668 177.23414306640626 143.58125 214.82926432291666 143.58125C 252.42438557942708 143.58125 284.6487752278646 168.46866666666668 322.243896484375 168.46866666666668C 359.8390177408854 168.46866666666668 392.0634073893229 164.63983333333334 429.6585286458333 164.63983333333334C 467.25364990234374 164.63983333333334 499.4780395507812 130.18033333333335 537.0731608072916 130.18033333333335C 574.668282063802 130.18033333333335 606.8926717122396 151.23891666666668 644.48779296875 151.23891666666668"
                                            />
                                            <g
                                                id="SvgjsG2357"
                                                class="apexcharts-series-markers-wrap"
                                                data-:real-index="1"
                                            >
                                                <g class="apexcharts-series-markers">
                                                    <circle
                                                        id="SvgjsCircle2408"
                                                        r="0"
                                                        cx="354.40625"
                                                        cy="164.63983333333334"
                                                        class="apexcharts-marker wymhtbckej no-pointer-events"
                                                        stroke="#ffffff"
                                                        fill="#b519ec"
                                                        fill-opacity="1"
                                                        stroke-width="2"
                                                        stroke-opacity="0.9"
                                                        default-marker-size="0"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <g
                                            id="SvgjsG2349"
                                            class="apexcharts-datalabels"
                                            data-:real-index="0"
                                        />
                                        <g
                                            id="SvgjsG2358"
                                            class="apexcharts-datalabels"
                                            data-:real-index="1"
                                        />
                                    </g>
                                    <line
                                        id="SvgjsLine2402"
                                        x1="0"
                                        y1="0"
                                        x2="708.8125"
                                        y2="0"
                                        stroke="#b6b6b6"
                                        stroke-dasharray="0"
                                        stroke-width="1"
                                        class="apexcharts-ycrosshairs"
                                    />
                                    <line
                                        id="SvgjsLine2403"
                                        x1="0"
                                        y1="0"
                                        x2="708.8125"
                                        y2="0"
                                        stroke-dasharray="0"
                                        stroke-width="0"
                                        class="apexcharts-ycrosshairs-hidden"
                                    />
                                    <g id="SvgjsG2404" class="apexcharts-yaxis-annotations" />
                                    <g id="SvgjsG2405" class="apexcharts-xaxis-annotations" />
                                    <g id="SvgjsG2406" class="apexcharts-point-annotations" />
                                    <rect
                                        id="SvgjsRect2409"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                        class="apexcharts-zoom-rect"
                                    />
                                    <rect
                                        id="SvgjsRect2410"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                        class="apexcharts-selection-rect"
                                    />
                                </g>
                                <g
                                    id="SvgjsG2377"
                                    class="apexcharts-yaxis"
                                    rel="0"
                                    transform="translate(18.703125, 0)"
                                >
                                    <g id="SvgjsG2378" class="apexcharts-yaxis-texts-g">
                                        <text
                                            id="SvgjsText2379"
                                            font-family="Poppins"
                                            x="20"
                                            y="82.4"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="13px"
                                            font-weight="100"
                                            fill="#3e4954"
                                            class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                            style="font-family: Poppins;"
                                        >
                                            <tspan id="SvgjsTspan2380">120</tspan>
                                        </text>
                                        <text
                                            id="SvgjsText2381"
                                            font-family="Poppins"
                                            x="20"
                                            y="139.8325"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="13px"
                                            font-weight="100"
                                            fill="#3e4954"
                                            class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                            style="font-family: Poppins;"
                                        >
                                            <tspan id="SvgjsTspan2382">90</tspan>
                                        </text>
                                        <text
                                            id="SvgjsText2383"
                                            font-family="Poppins"
                                            x="20"
                                            y="197.26500000000001"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="13px"
                                            font-weight="100"
                                            fill="#3e4954"
                                            class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                            style="font-family: Poppins;"
                                        >
                                            <tspan id="SvgjsTspan2384">60</tspan>
                                        </text>
                                        <text
                                            id="SvgjsText2385"
                                            font-family="Poppins"
                                            x="20"
                                            y="254.69750000000002"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="13px"
                                            font-weight="100"
                                            fill="#3e4954"
                                            class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                            style="font-family: Poppins;"
                                        >
                                            <tspan id="SvgjsTspan2386">30</tspan>
                                        </text>
                                        <text
                                            id="SvgjsText2387"
                                            font-family="Poppins"
                                            x="20"
                                            y="312.13"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="13px"
                                            font-weight="100"
                                            fill="#3e4954"
                                            class="apexcharts-text apexcharts-yaxis-label apexcharts-xaxis-label"
                                            style="font-family: Poppins;"
                                        >
                                            <tspan id="SvgjsTspan2388">0</tspan>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG2341" class="apexcharts-annotations" />
                            </svg>
                            <div
                                class="apexcharts-tooltip apexcharts-theme-light"
                                style="left: 200.063px; top: 152.325px;"
                            >
                                <div
                                    class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                >May</div>
                                <div
                                    class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="display: flex;"
                                >
                                    <span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(47, 76, 221);"
                                    ></span>
                                    <div
                                        class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                    >
                                        <div class="apexcharts-tooltip-y-group">
                                            <span class="apexcharts-tooltip-text-label">Net Profit:</span>
                                            <span
                                                class="apexcharts-tooltip-text-value"
                                            >$ 42 thousands</span>
                                        </div>
                                        <div class="apexcharts-tooltip-z-group">
                                            <span class="apexcharts-tooltip-text-z-label"></span>
                                            <span class="apexcharts-tooltip-text-z-value"></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="display: flex;"
                                >
                                    <span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(181, 25, 236);"
                                    ></span>
                                    <div
                                        class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"
                                    >
                                        <div class="apexcharts-tooltip-y-group">
                                            <span class="apexcharts-tooltip-text-label">Revenue:</span>
                                            <span
                                                class="apexcharts-tooltip-text-value"
                                            >$ 34 thousands</span>
                                        </div>
                                        <div class="apexcharts-tooltip-z-group">
                                            <span class="apexcharts-tooltip-text-z-label"></span>
                                            <span class="apexcharts-tooltip-text-z-value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                style="left: 380.219px; top: 312.73px;"
                            >
                                <div
                                    class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 26.4531px;"
                                >May</div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                            >
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 812px; height: 453px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header border-0 pb-0 d-sm-flex d-block">
					<div class="me-3">
						<h4 class="card-title mb-1">Trending Items</h4>
						<small class="mb-0">Lorem ipsum dolor sit amet, consectetur</small>
					</div>
				</div>
				<div class="card-body p-0 pt-3">
					<div class="media items-list-1">
						<span class="number col-1 px-0 align-self-center">#1</span>
						<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/1.jpg" alt="DexignZone"></a>
						<div class="media-body col-sm-4 col-6 col-xxl-5 px-0">
							<h5 class="mt-0 mb-3"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
							<small class="font-w500"><strong class="text-secondary me-2">ksh 1249.56</strong> <a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
						</div>
						<div class="media-footer ms-auto col-3 px-0 d-flex align-self-center align-items-center">
							<div class="me-3">
								<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span><svg class="peity" height="30" width="47"><polygon fill="rgba(48, 194, 89, .2)" points="0 28.5 0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5 47 28.5"></polygon><polyline fill="none" points="0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5" stroke="#30c259" stroke-width="3" stroke-linecap="square"></polyline></svg>
							</div>
							<div>
								<h3 class="mb-0 font-w600 text-black">524</h3>
								<span class="fs-14">Sales (12%)</span>
							</div>
						</div>
					</div>
					<div class="media items-list-1">
						<span class="number col-1 px-0 align-self-center">#2</span>
						<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/2.jpg" alt="DexignZone"></a>
						<div class="media-body col-sm-4 col-6 col-xxl-5 px-0">
							<h5 class="mt-0 mb-3 text-black"><a class="text-black" href="ecom-product-detail.html">Chicken Wings in Asian soy &amp; ginger sauce</a></h5>
							<small class="font-w500"><strong class="text-secondary me-2">ksh 1200.56</strong> <a class="text-primary" href="javascript:void(0);">Dinner</a></small>
						</div>
						<div class="media-footer ms-auto col-3 px-0 d-flex align-self-center align-items-center">
							<div class="me-3">
								<span class="peity-danger" data-style="width:100%;" style="display: none;">4,1,2,0</span><svg class="peity" height="30" width="47"><polygon fill="rgba(248, 79, 78, .2)" points="0 28.5 0 1.5 15.666666666666666 21.75 31.333333333333332 15 47 28.5 47 28.5"></polygon><polyline fill="none" points="0 1.5 15.666666666666666 21.75 31.333333333333332 15 47 28.5" stroke="#f84f4e" stroke-width="3" stroke-linecap="square"></polyline></svg>
							</div>
							<div>
								<h3 class="mb-0 font-w600 text-black">215</h3>
								<span class="fs-14">Sales (12%)</span>
							</div>
						</div>
					</div>
					<div class="media items-list-1">
						<span class="number col-1 px-0 align-self-center">#3</span>
						<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/3.jpg" alt="DexignZone"></a>
						<div class="media-body col-sm-4 col-6 col-xxl-5 px-0">
							<h5 class="mt-0 mb-3 text-black"><a class="text-black" href="ecom-product-detail.html">The Basket Wrap with Filet and Summer vegetables</a></h5>
							<small class="font-w500"><strong class="text-secondary me-2">ksh 1200.56</strong> <a class="text-primary" href="javascript:void(0);">Dinner</a></small>
						</div>
						<div class="media-footer ms-auto col-3 px-0 d-flex align-self-center align-items-center">
							<div class="me-3">
								<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span><svg class="peity" height="30" width="47"><polygon fill="rgba(48, 194, 89, .2)" points="0 28.5 0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5 47 28.5"></polygon><polyline fill="none" points="0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5" stroke="#30c259" stroke-width="3" stroke-linecap="square"></polyline></svg>
							</div>
							<div>
								<h3 class="mb-0 font-w600 text-black">524</h3>
								<span class="fs-14">Sales (12%)</span>
							</div>
						</div>
					</div>
					<div class="media items-list-1">
						<span class="number col-1 px-0 align-self-center">#4</span>
						<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/4.jpg" alt="DexignZone"></a>
						<div class="media-body col-sm-4 col-6 col-xxl-5 px-0">
							<h5 class="mt-0 mb-3 text-black"><a class="text-black" href="ecom-product-detail.html">Iced Tea</a></h5>
							<small class="font-w500"><strong class="text-secondary me-2">ksh 1200.56</strong> <a class="text-primary" href="javascript:void(0);">DINNER</a></small>
						</div>
						<div class="media-footer ms-auto col-3 px-0 d-flex align-self-center align-items-center">
							<div class="me-3">
								<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span><svg class="peity" height="30" width="47"><polygon fill="rgba(48, 194, 89, .2)" points="0 28.5 0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5 47 28.5"></polygon><polyline fill="none" points="0 28.5 15.666666666666666 15 31.333333333333332 21.75 47 1.5" stroke="#30c259" stroke-width="3" stroke-linecap="square"></polyline></svg>
							</div>
							<div>
								<h3 class="mb-0 font-w600 text-black">76</h3>
								<span class="fs-14">Sales (12%)</span>
							</div>
						</div>
					</div> 
					<div class="media items-list-1">
						<span class="number col-1 px-0 align-self-center">#5</span>
						<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic5.jpg" alt="DexignZone"></a>
						<div class="media-body col-sm-4 col-6 col-xxl-5 px-0">
							<h5 class="mt-0 mb-3 text-black"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
							<small class="font-w500"><strong class="text-secondary me-2">ksh 1200.56</strong> <a class="text-primary" href="javascript:void(0);">DINNER</a></small>
						</div>
						<div class="media-footer ms-auto col-3 px-0 d-flex align-self-center align-items-center">
							<div class="me-3">
								<span class="peity-danger" data-style="width:100%;" style="display: none;">4,1,2,0</span><svg class="peity" height="30" width="47"><polygon fill="rgba(248, 79, 78, .2)" points="0 28.5 0 1.5 15.666666666666666 21.75 31.333333333333332 15 47 28.5 47 28.5"></polygon><polyline fill="none" points="0 1.5 15.666666666666666 21.75 31.333333333333332 15 47 28.5" stroke="#f84f4e" stroke-width="3" stroke-linecap="square"></polyline></svg>
							</div>
							<div>
								<h3 class="mb-0 font-w600 text-black">180</h3>
								<span class="fs-14">Sales (12%)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header border-0 pb-0 d-sm-flex flex-wrap d-block">
					<div class="mb-3">
						<h4 class="card-title mb-1">Most Selling Items</h4>
						<small class="mb-0">Lorem ipsum dolor sit amet, consectetur</small>
					</div>
					<div class="card-action card-tabs mb-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab" aria-selected="true">
									Monthly
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="false">
									Weekly
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#today" role="tab" aria-selected="false">
									Today
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body tab-content pt-3">
					<div class="tab-pane fade active show" id="monthly">
						<div class="height500 dz-scroll loadmore-content ps ps--active-y" id="sellingItemsContent">
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/4.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Iced Tea</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> Beverages</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 1200.56</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/3.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Chocolate Chip Pancakes with Banana Slices</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> Food</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 500.67</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/2.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">The Basket Wrap with Filet and Summer vegetables</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> FOOD</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 1140.21</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="/back_end_assets/images/dish/1.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Chicken Wings in Asian soy &amp; ginger sauce</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> Food</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 800.15</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic1.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Watermelon juice with ice</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 5.67</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 500px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 458px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 500px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 379px;"></div></div></div>
						<div class="text-center bg-white pt-3">
							<a href="javascript:void(0);" class="btn-link dz-load-more" rel="ajax/selling-items.html" id="sellingItems">View more <i class="fa fa-angle-down ms-2 scale-2"></i></a>
						</div>
					</div>
					<div class="tab-pane fade" id="weekly">
						<div class="height500 dz-scroll loadmore-content ps" id="sellingItems2Content">
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic3.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Pizza Meal for Kids (Small size)</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 11.21</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic2.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Meidum Spicy Spagethi Italiano</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 1500.15</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic1.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> JUICE</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 1750.67</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
						<div class="text-center bg-white pt-3">
							<a href="javascript:void(0);" class="btn-link dz-load-more" rel="ajax/selling-items.html" id="sellingItems2">View more <i class="fa fa-angle-down ms-2 scale-2"></i></a>
						</div>
					</div>
					<div class="tab-pane fade" id="today">
						<div class="height500 dz-scroll loadmore-content ps" id="sellingItems3Content">
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic2.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Tuna soup spinach with himalaya salt</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);"> JUICE</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 1200.15</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="media mb-4 items-list-2">
								<a href="ecom-product-detail.html"><img class="img-fluid rounded me-3" width="85" src="images/dish/pic1.jpg" alt="DexignZone"></a>
								<div class="media-body col-6 px-0">
									<h5 class="mt-0 mb-1"><a class="text-black" href="ecom-product-detail.html">Watermelon juice with ice</a></h5>
									<small class="font-w500 mb-3"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
									<span class="text-secondary me-2 fo"></span>
									<ul class="fs-14 list-inline">
										<li class="me-3">Serves for 4 Person</li>
										<li>24mins</li>
									</ul>
								</div>
								<div class="media-footer align-self-center ms-auto d-block align-items-center d-sm-flex">
									<h3 class="mb-0 font-w600 text-secondary">ksh 500.67</h3>
									<div class="dropdown ms-3 ">
										<button type="button" class="btn btn-secondary sharp tp-btn-light " data-bs-toggle="dropdown">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
						<div class="text-center bg-white pt-3">
							<a href="javascript:void(0);" class="btn-link dz-load-more" rel="ajax/selling-items.html" id="sellingItems3">View more <i class="fa fa-angle-down ms-2 scale-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {

}
</script>

<style>	    	
    .apexcharts-legend {	
      display: flex;	
      overflow: auto;	
      padding: 0 10px;	
    }	
    .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {	
      flex-wrap: wrap	
    }	
    .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
      flex-direction: column;	
      bottom: 0;	
    }	
    .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
      justify-content: flex-start;	
    }	
    .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {	
      justify-content: center;  	
    }	
    .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {	
      justify-content: flex-end;	
    }	
    .apexcharts-legend-series {	
      cursor: pointer;	
      line-height: normal;	
    }	
    .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{	
      display: flex;	
      align-items: center;	
    }	
    .apexcharts-legend-text {	
      position: relative;	
      font-size: 14px;	
    }	
    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
      pointer-events: none;	
    }	
    .apexcharts-legend-marker {	
      position: relative;	
      display: inline-block;	
      cursor: pointer;	
      margin-right: 3px;	
      border-style: solid;
    }	
    	
    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
      display: inline-block;	
    }	
    .apexcharts-legend-series.apexcharts-no-click {	
      cursor: auto;	
    }	
    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
      display: none !important;	
    }	
    .apexcharts-inactive-legend {	
      opacity: 0.45;	
    }
</style>