@extends('layouts.app')
@section('title')
    Töleg
@endsection
@section('content')
    <div class="container-xl">
        <div class="row row-cols-2 align-items-center pb-5">
            <div class="col-5">
                <p class="display-4 fw-semibold"><span class="text-primary">Töleg</span> etmek beýle aňsat bolmandy!</p>
                <p>"Töleg" programmasynyň üsti bilen telekom internet hasabyňyzy doldurmak aňsat</p>
                <div class="row">
                    <div class="col-4 me-3">
                        <a href="#"><svg width="180" height="52" viewBox="0 0 180 52" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                <path d="M173.333 52H6.66667C3.00167 52 0 49.0734 0 45.5V6.5C0 2.92663 3.00167 2.74817e-06 6.66667 2.74817e-06H173.333C176.998 2.74817e-06 180 2.92663 180 6.5V45.5C180 49.0734 176.998 52 173.333 52Z"
                                      fill="black"/>
                                <path d="M13.9133 9.80044C13.5216 10.2002 13.2949 10.8226 13.2949 11.6286V40.3781C13.2949 41.1841 13.5216 41.8064 13.9133 42.2062L14.0099 42.2939L30.5332 26.1902V25.8099L14.0099 9.7062L13.9133 9.80044Z"
                                      fill="url(#paint0_linear_66_2232)"/>
                                <path d="M36.0349 31.5615L30.5332 26.1909V25.8106L36.0415 20.44L36.1649 20.5099L42.6882 24.1288C44.5499 25.1558 44.5499 26.8458 42.6882 27.8793L36.1649 31.4916L36.0349 31.5615Z"
                                      fill="url(#paint1_linear_66_2232)"/>
                                <path d="M36.165 31.4912L30.5333 26.0003L13.9133 42.2065C14.5317 42.8402 15.54 42.9166 16.6867 42.2828L36.165 31.4912Z"
                                      fill="url(#paint2_linear_66_2232)"/>
                                <path d="M36.165 20.5091L16.6867 9.71751C15.54 9.09025 14.5317 9.16663 13.9133 9.80038L30.5333 26L36.165 20.5091Z"
                                      fill="url(#paint3_linear_66_2232)"/>
                                <path d="M63.2234 13.3162C63.2234 14.4017 62.8901 15.2711 62.2334 15.9195C61.4784 16.6881 60.4951 17.0748 59.2901 17.0748C58.1384 17.0748 57.155 16.6816 56.3484 15.9065C55.54 15.12 55.1367 14.1547 55.1367 12.9993C55.1367 11.844 55.54 10.8787 56.3484 10.0987C57.155 9.31708 58.1384 8.92383 59.2901 8.92383C59.8634 8.92383 60.41 9.0392 60.9317 9.2537C61.4517 9.46983 61.875 9.76233 62.1817 10.1231L61.4851 10.8088C60.95 10.193 60.2217 9.88908 59.2901 9.88908C58.4501 9.88908 57.7217 10.1751 57.1034 10.752C56.4917 11.3305 56.185 12.0796 56.185 12.9993C56.185 13.9191 56.4917 14.6747 57.1034 15.2532C57.7217 15.8236 58.4501 16.1161 59.2901 16.1161C60.1817 16.1161 60.9317 15.8236 61.5234 15.2467C61.9134 14.8648 62.1351 14.3383 62.1934 13.6656H59.2901V12.7263H63.1634C63.2101 12.9295 63.2234 13.1261 63.2234 13.3162Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M69.3683 10.0597H65.73V12.5297H69.01V13.4689H65.73V15.9389H69.3683V16.896H64.7V9.10254H69.3683V10.0597Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M73.705 16.896H72.675V10.0597H70.4434V9.10254H75.9384V10.0597H73.705V16.896Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M79.915 16.896V9.10254H80.9434V16.896H79.915Z" fill="white" stroke="white"
                                      stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M85.5016 16.896H84.48V10.0597H82.24V9.10254H87.7416V10.0597H85.5016V16.896Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M98.1451 15.8935C97.3568 16.6816 96.3801 17.0748 95.2151 17.0748C94.0434 17.0748 93.0668 16.6816 92.2784 15.8935C91.4918 15.107 91.1001 14.1417 91.1001 12.9993C91.1001 11.857 91.4918 10.8917 92.2784 10.1052C93.0668 9.31708 94.0434 8.92383 95.2151 8.92383C96.3734 8.92383 97.3501 9.31708 98.1384 10.1117C98.9318 10.9047 99.3234 11.8635 99.3234 12.9993C99.3234 14.1417 98.9318 15.107 98.1451 15.8935ZM93.0401 15.2402C93.6334 15.8236 94.3551 16.1161 95.2151 16.1161C96.0684 16.1161 96.7968 15.8236 97.3834 15.2402C97.9751 14.6568 98.2751 13.9077 98.2751 12.9993C98.2751 12.091 97.9751 11.3418 97.3834 10.7585C96.7968 10.1751 96.0684 9.88258 95.2151 9.88258C94.3551 9.88258 93.6334 10.1751 93.0401 10.7585C92.4484 11.3418 92.1484 12.091 92.1484 12.9993C92.1484 13.9077 92.4484 14.6568 93.0401 15.2402Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M100.768 16.896V9.10254H102.018L105.905 15.1638H105.95L105.905 13.6655V9.10254H106.933V16.896H105.86L101.79 10.5358H101.745L101.79 12.0405V16.896H100.768Z"
                                      fill="white" stroke="white" stroke-width="0.16" stroke-miterlimit="10"/>
                                <path d="M90.8466 28.2783C87.715 28.2783 85.1566 30.602 85.1566 33.8082C85.1566 36.9883 87.715 39.3364 90.8466 39.3364C93.985 39.3364 96.5433 36.9883 96.5433 33.8082C96.5433 30.602 93.985 28.2783 90.8466 28.2783ZM90.8466 37.1589C89.1283 37.1589 87.65 35.776 87.65 33.8082C87.65 31.8143 89.1283 30.4558 90.8466 30.4558C92.565 30.4558 94.05 31.8143 94.05 33.8082C94.05 35.776 92.565 37.1589 90.8466 37.1589ZM78.4316 28.2783C75.2933 28.2783 72.7416 30.602 72.7416 33.8082C72.7416 36.9883 75.2933 39.3364 78.4316 39.3364C81.5683 39.3364 84.1216 36.9883 84.1216 33.8082C84.1216 30.602 81.5683 28.2783 78.4316 28.2783ZM78.4316 37.1589C76.7116 37.1589 75.2283 35.776 75.2283 33.8082C75.2283 31.8143 76.7116 30.4558 78.4316 30.4558C80.15 30.4558 81.6283 31.8143 81.6283 33.8082C81.6283 35.776 80.15 37.1589 78.4316 37.1589ZM63.6583 29.9732V32.3229H69.4133C69.245 33.6359 68.795 34.6012 68.105 35.2739C67.265 36.0864 65.9566 36.9883 63.6583 36.9883C60.1166 36.9883 57.3433 34.2014 57.3433 30.7483C57.3433 27.2952 60.1166 24.5083 63.6583 24.5083C65.5733 24.5083 66.9666 25.2379 67.995 26.1837L69.6933 24.5278C68.255 23.1888 66.3416 22.1602 63.6583 22.1602C58.8016 22.1602 54.72 26.013 54.72 30.7483C54.72 35.4835 58.8016 39.3364 63.6583 39.3364C66.2833 39.3364 68.255 38.4979 69.805 36.9249C71.3933 35.3763 71.8883 33.1988 71.8883 31.4405C71.8883 30.8945 71.8416 30.3924 71.7583 29.9732H63.6583ZM124.068 31.7948C123.6 30.5582 122.155 28.2783 119.212 28.2783C116.295 28.2783 113.867 30.5192 113.867 33.8082C113.867 36.9054 116.27 39.3364 119.492 39.3364C122.097 39.3364 123.6 37.7878 124.218 36.8859L122.285 35.6298C121.64 36.5495 120.762 37.1589 119.492 37.1589C118.23 37.1589 117.325 36.595 116.745 35.4835L124.33 32.4237L124.068 31.7948ZM116.335 33.6359C116.27 31.5039 118.033 30.4119 119.297 30.4119C120.287 30.4119 121.127 30.8945 121.407 31.5852L116.335 33.6359ZM110.17 39H112.663V22.75H110.17V39ZM106.087 29.51H106.003C105.443 28.8633 104.375 28.2783 103.022 28.2783C100.182 28.2783 97.585 30.7093 97.585 33.826C97.585 36.9249 100.182 39.3364 103.022 39.3364C104.375 39.3364 105.443 38.7465 106.003 38.0803H106.087V38.8733C106.087 40.9874 104.928 42.1233 103.06 42.1233C101.537 42.1233 100.592 41.0508 100.202 40.1489L98.0333 41.0313C98.6583 42.497 100.313 44.3008 103.06 44.3008C105.983 44.3008 108.45 42.6238 108.45 38.5434V28.6147H106.087V29.51ZM103.235 37.1589C101.517 37.1589 100.078 35.7565 100.078 33.826C100.078 31.8777 101.517 30.4558 103.235 30.4558C104.928 30.4558 106.263 31.8777 106.263 33.826C106.263 35.7565 104.928 37.1589 103.235 37.1589ZM135.742 22.75H129.778V39H132.265V32.8429H135.742C138.503 32.8429 141.212 30.8945 141.212 27.7957C141.212 24.6984 138.497 22.75 135.742 22.75ZM135.807 30.5825H132.265V25.0104H135.807C137.663 25.0104 138.723 26.5135 138.723 27.7957C138.723 29.0534 137.663 30.5825 135.807 30.5825ZM151.178 28.2474C149.382 28.2474 147.513 29.0209 146.745 30.7353L148.952 31.6372C149.427 30.7353 150.3 30.4428 151.223 30.4428C152.513 30.4428 153.822 31.1984 153.842 32.5325V32.7032C153.392 32.4497 152.428 32.0743 151.243 32.0743C148.867 32.0743 146.445 33.3499 146.445 35.7305C146.445 37.908 148.392 39.3104 150.58 39.3104C152.253 39.3104 153.177 38.5743 153.757 37.7179H153.842V38.974H156.243V32.7405C156.243 29.8594 154.037 28.2474 151.178 28.2474ZM150.878 37.1524C150.065 37.1524 148.932 36.7592 148.932 35.776C148.932 34.5183 150.345 34.0357 151.568 34.0357C152.663 34.0357 153.177 34.2713 153.842 34.5817C153.647 36.0864 152.318 37.1524 150.878 37.1524ZM164.993 28.6033L162.135 35.6477H162.05L159.095 28.6033H156.413L160.853 38.4475L158.32 43.9254H160.918L167.76 28.6033H164.993ZM142.578 39H145.072V22.75H142.578V39Z"
                                      fill="white"/>
                                <defs>
                                    <linearGradient id="paint0_linear_66_2232" x1="29.0662" y1="40.6775" x2="7.25605"
                                                    y2="18.3081" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00A0FF"/>
                                        <stop offset="0.0066" stop-color="#00A1FF"/>
                                        <stop offset="0.2601" stop-color="#00BEFF"/>
                                        <stop offset="0.5122" stop-color="#00D2FF"/>
                                        <stop offset="0.7604" stop-color="#00DFFF"/>
                                        <stop offset="1" stop-color="#00E3FF"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_66_2232" x1="45.1124" y1="25.999" x2="12.8499"
                                                    y2="25.999" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE000"/>
                                        <stop offset="0.4087" stop-color="#FFBD00"/>
                                        <stop offset="0.7754" stop-color="#FFA500"/>
                                        <stop offset="1" stop-color="#FF9C00"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_66_2232" x1="33.1027" y1="23.0154" x2="3.52635"
                                                    y2="-7.31927" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF3A44"/>
                                        <stop offset="1" stop-color="#C31162"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_66_2232" x1="9.72973" y1="51.7709" x2="22.9369"
                                                    y2="38.2253" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#32A071"/>
                                        <stop offset="0.0685" stop-color="#2DA771"/>
                                        <stop offset="0.4762" stop-color="#15CF74"/>
                                        <stop offset="0.8009" stop-color="#06E775"/>
                                        <stop offset="1" stop-color="#00F076"/>
                                    </linearGradient>
                                </defs>
                            </svg></a>
                    </div>
                    <div class="col-5">
                        <a href="#"><svg width="180" height="52" viewBox="0 0 180 52" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                <path d="M179 46.0034C179 48.7745 176.709 51.0192 173.874 51.0192H6.13243C3.2995 51.0192 1 48.7745 1 46.0034V6.00382C1 3.23398 3.2995 0.981445 6.13243 0.981445H173.873C176.709 0.981445 178.999 3.23398 178.999 6.00382L179 46.0034Z"
                                      fill="black"/>
                                <path d="M40.1707 25.7191C40.132 21.5292 43.6894 19.4908 43.852 19.3959C41.8374 16.532 38.7147 16.1407 37.6174 16.1095C34.9947 15.8404 32.4507 17.6396 31.1147 17.6396C29.752 17.6396 27.6947 16.1355 25.4774 16.1797C22.624 16.2226 19.9547 17.8333 18.4907 20.3345C15.4694 25.4344 17.7227 32.9289 20.6174 37.0512C22.0654 39.0701 23.7574 41.3243 25.972 41.245C28.1387 41.1579 28.948 39.8982 31.5627 39.8982C34.1534 39.8982 34.9134 41.245 37.172 41.1943C39.4974 41.1579 40.9614 39.1663 42.3587 37.1292C44.032 34.8152 44.704 32.5363 44.7307 32.4193C44.676 32.4011 40.2147 30.741 40.1707 25.7191Z"
                                      fill="white"/>
                                <path d="M35.904 13.3977C37.0694 11.9768 37.8667 10.0437 37.6454 8.08203C35.9587 8.15483 33.8494 9.21953 32.6347 10.6092C31.56 11.8338 30.6 13.841 30.848 15.7286C32.7427 15.8664 34.688 14.7965 35.904 13.3977Z"
                                      fill="white"/>
                                <path d="M65.4002 13.0113C65.4002 14.5414 64.9295 15.6932 63.9895 16.4667C63.1189 17.1804 61.8815 17.5379 60.2789 17.5379C59.4842 17.5379 58.8042 17.5041 58.2349 17.4365V9.07621C58.9775 8.95921 59.7775 8.89941 60.6415 8.89941C62.1682 8.89941 63.3189 9.22311 64.0949 9.87051C64.9642 10.6024 65.4002 11.6489 65.4002 13.0113ZM63.9269 13.049C63.9269 12.0571 63.6575 11.2966 63.1189 10.7662C62.5802 10.2371 61.7935 9.97191 60.7575 9.97191C60.3175 9.97191 59.9429 10.0005 59.6322 10.0603V16.416C59.8042 16.442 60.1189 16.4537 60.5762 16.4537C61.6455 16.4537 62.4709 16.1638 63.0522 15.584C63.6335 15.0042 63.9269 14.1592 63.9269 13.049Z"
                                      fill="white"/>
                                <path d="M73.2122 14.3482C73.2122 15.2907 72.9362 16.0629 72.3842 16.6687C71.8055 17.2914 71.0388 17.6021 70.0815 17.6021C69.1588 17.6021 68.4242 17.3044 67.8762 16.7064C67.3295 16.1097 67.0562 15.357 67.0562 14.4496C67.0562 13.5006 67.3375 12.7219 67.9028 12.1174C68.4682 11.5129 69.2282 11.21 70.1855 11.21C71.1082 11.21 71.8495 11.5077 72.4108 12.1044C72.9442 12.6842 73.2122 13.433 73.2122 14.3482ZM71.7628 14.3924C71.7628 13.8269 71.6375 13.342 71.3882 12.9377C71.0948 12.4489 70.6775 12.2045 70.1348 12.2045C69.5735 12.2045 69.1468 12.4489 68.8535 12.9377C68.6028 13.342 68.4788 13.8347 68.4788 14.4171C68.4788 14.9826 68.6042 15.4675 68.8535 15.8718C69.1562 16.3606 69.5775 16.605 70.1215 16.605C70.6548 16.605 71.0735 16.3567 71.3748 15.8588C71.6335 15.4467 71.7628 14.9579 71.7628 14.3924Z"
                                      fill="white"/>
                                <path d="M83.6867 11.334L81.7201 17.4622H80.4401L79.6254 14.8011C79.4187 14.1368 79.2507 13.4764 79.1201 12.8212H79.0947C78.9734 13.4946 78.8054 14.1537 78.5894 14.8011L77.7241 17.4622H76.4294L74.5801 11.334H76.0161L76.7267 14.2473C76.8987 14.9363 77.0401 15.5928 77.1534 16.2142H77.1787C77.2827 15.702 77.4547 15.0494 77.6974 14.2603L78.5894 11.3353H79.7281L80.5827 14.1979C80.7894 14.896 80.9574 15.5681 81.0867 16.2155H81.1254C81.2201 15.585 81.3627 14.9129 81.5521 14.1979L82.3147 11.3353H83.6867V11.334Z"
                                      fill="white"/>
                                <path d="M90.9307 17.463H89.5334V13.953C89.5334 12.8714 89.112 12.3306 88.2667 12.3306C87.852 12.3306 87.5174 12.4788 87.2574 12.7765C87 13.0742 86.8694 13.4252 86.8694 13.8269V17.4617H85.472V13.0859C85.472 12.5477 85.4547 11.964 85.4214 11.3322H86.6494L86.7147 12.2903H86.7534C86.9161 11.9926 87.1587 11.7469 87.4774 11.5506C87.856 11.3218 88.28 11.2061 88.744 11.2061C89.3307 11.2061 89.8187 11.3907 90.2067 11.7612C90.6894 12.2149 90.9307 12.8922 90.9307 13.7918V17.463Z"
                                      fill="white"/>
                                <path d="M94.7842 17.4626H93.3882V8.52246H94.7842V17.4626Z" fill="white"/>
                                <path d="M103.011 14.3482C103.011 15.2907 102.735 16.0629 102.183 16.6687C101.604 17.2914 100.836 17.6021 99.8803 17.6021C98.9563 17.6021 98.2216 17.3044 97.675 16.7064C97.1283 16.1097 96.855 15.357 96.855 14.4496C96.855 13.5006 97.1363 12.7219 97.7017 12.1174C98.267 11.5129 99.027 11.21 99.983 11.21C100.907 11.21 101.647 11.5077 102.21 12.1044C102.743 12.6842 103.011 13.433 103.011 14.3482ZM101.56 14.3924C101.56 13.8269 101.435 13.342 101.186 12.9377C100.894 12.4489 100.475 12.2045 99.9336 12.2045C99.371 12.2045 98.9443 12.4489 98.6523 12.9377C98.4016 13.342 98.2776 13.8347 98.2776 14.4171C98.2776 14.9826 98.403 15.4675 98.6523 15.8718C98.955 16.3606 99.3763 16.605 99.9203 16.605C100.454 16.605 100.871 16.3567 101.172 15.8588C101.432 15.4467 101.56 14.9579 101.56 14.3924Z"
                                      fill="white"/>
                                <path d="M109.774 17.463H108.519L108.415 16.7571H108.376C107.947 17.32 107.335 17.6021 106.54 17.6021C105.947 17.6021 105.467 17.4162 105.106 17.047C104.778 16.7116 104.614 16.2943 104.614 15.799C104.614 15.0502 104.934 14.4795 105.578 14.0843C106.22 13.6891 107.124 13.4954 108.288 13.5045V13.3901C108.288 12.5828 107.854 12.1798 106.983 12.1798C106.363 12.1798 105.816 12.3319 105.344 12.6335L105.06 11.7391C105.644 11.3868 106.366 11.21 107.216 11.21C108.859 11.21 109.683 12.055 109.683 13.745V16.0018C109.683 16.6141 109.714 17.1016 109.774 17.463ZM108.323 15.357V14.4119C106.782 14.3859 106.011 14.798 106.011 15.6469C106.011 15.9667 106.099 16.2059 106.279 16.3658C106.459 16.5257 106.688 16.605 106.962 16.605C107.268 16.605 107.555 16.5101 107.816 16.3216C108.079 16.1318 108.24 15.8913 108.3 15.5962C108.315 15.5299 108.323 15.4493 108.323 15.357Z"
                                      fill="white"/>
                                <path d="M117.713 17.4626H116.473L116.408 16.4785H116.369C115.973 17.2273 115.299 17.6017 114.351 17.6017C113.593 17.6017 112.963 17.3118 112.463 16.732C111.963 16.1522 111.713 15.3995 111.713 14.4752C111.713 13.4833 111.984 12.6799 112.528 12.0663C113.055 11.4943 113.7 11.2083 114.468 11.2083C115.312 11.2083 115.903 11.4852 116.239 12.0403H116.265V8.52246H117.664V15.8116C117.664 16.4083 117.68 16.9582 117.713 17.4626ZM116.265 14.8782V13.8564C116.265 13.6796 116.252 13.5366 116.227 13.4274C116.148 13.0998 115.979 12.8242 115.721 12.6019C115.461 12.3796 115.148 12.2678 114.787 12.2678C114.265 12.2678 113.857 12.4693 113.557 12.8736C113.26 13.2779 113.109 13.794 113.109 14.4245C113.109 15.0303 113.252 15.5217 113.539 15.9C113.841 16.303 114.249 16.5045 114.76 16.5045C115.219 16.5045 115.585 16.3368 115.864 16.0001C116.133 15.6894 116.265 15.315 116.265 14.8782Z"
                                      fill="white"/>
                                <path d="M129.664 14.3482C129.664 15.2907 129.388 16.0629 128.836 16.6687C128.258 17.2914 127.492 17.6021 126.534 17.6021C125.612 17.6021 124.878 17.3044 124.328 16.7064C123.782 16.1097 123.508 15.357 123.508 14.4496C123.508 13.5006 123.79 12.7219 124.355 12.1174C124.92 11.5129 125.68 11.21 126.639 11.21C127.56 11.21 128.303 11.5077 128.863 12.1044C129.396 12.6842 129.664 13.433 129.664 14.3482ZM128.216 14.3924C128.216 13.8269 128.091 13.342 127.842 12.9377C127.547 12.4489 127.131 12.2045 126.587 12.2045C126.027 12.2045 125.6 12.4489 125.306 12.9377C125.055 13.342 124.931 13.8347 124.931 14.4171C124.931 14.9826 125.056 15.4675 125.306 15.8718C125.608 16.3606 126.03 16.605 126.574 16.605C127.107 16.605 127.527 16.3567 127.828 15.8588C128.086 15.4467 128.216 14.9579 128.216 14.3924Z"
                                      fill="white"/>
                                <path d="M137.177 17.463H135.781V13.953C135.781 12.8714 135.36 12.3306 134.513 12.3306C134.099 12.3306 133.764 12.4788 133.505 12.7765C133.247 13.0742 133.117 13.4252 133.117 13.8269V17.4617H131.719V13.0859C131.719 12.5477 131.703 11.964 131.669 11.3322H132.896L132.961 12.2903H133C133.164 11.9926 133.407 11.7469 133.724 11.5506C134.104 11.3218 134.527 11.2061 134.992 11.2061C135.577 11.2061 136.065 11.3907 136.453 11.7612C136.937 12.2149 137.177 12.8922 137.177 13.7918V17.463Z"
                                      fill="white"/>
                                <path d="M146.581 12.3553H145.043V15.3323C145.043 16.0889 145.316 16.4672 145.857 16.4672C146.108 16.4672 146.316 16.4464 146.48 16.4035L146.516 17.437C146.24 17.5384 145.877 17.5891 145.431 17.5891C144.879 17.5891 144.449 17.4253 144.139 17.0977C143.827 16.7701 143.672 16.2189 143.672 15.4454V12.3553H142.753V11.3348H143.672V10.2116L145.041 9.80859V11.3335H146.58V12.3553H146.581Z"
                                      fill="white"/>
                                <path d="M153.979 17.4626H152.58V13.9786C152.58 12.8801 152.159 12.3302 151.315 12.3302C150.667 12.3302 150.224 12.6487 149.981 13.2857C149.94 13.4196 149.916 13.5834 149.916 13.7758V17.4613H148.52V8.52246H149.916V12.2158H149.943C150.383 11.5437 151.013 11.2083 151.831 11.2083C152.409 11.2083 152.888 11.3929 153.268 11.7634C153.741 12.2249 153.979 12.9113 153.979 13.8187V17.4626Z"
                                      fill="white"/>
                                <path d="M161.609 14.1089C161.609 14.3533 161.591 14.5587 161.557 14.7264H157.367C157.385 15.3322 157.585 15.7937 157.973 16.1135C158.328 16.3995 158.785 16.5425 159.345 16.5425C159.965 16.5425 160.531 16.4463 161.04 16.2526L161.259 17.199C160.663 17.4512 159.961 17.5773 159.149 17.5773C158.176 17.5773 157.409 17.2978 156.855 16.7388C156.297 16.1798 156.021 15.4297 156.021 14.4885C156.021 13.5642 156.279 12.7946 156.797 12.181C157.339 11.5258 158.071 11.1982 158.995 11.1982C159.899 11.1982 160.585 11.5258 161.049 12.181C161.424 12.701 161.609 13.3445 161.609 14.1089ZM160.276 13.7566C160.287 13.3523 160.195 13.0039 160.005 12.7101C159.763 12.3318 159.393 12.142 158.893 12.142C158.437 12.142 158.065 12.3266 157.781 12.6971C157.549 12.9922 157.412 13.3445 157.367 13.7566H160.276Z"
                                      fill="white"/>
                                <path d="M71.5269 40.9557H68.4989L66.8402 35.874H61.0749L59.4949 40.9557H56.5469L62.2589 23.6553H65.7869L71.5269 40.9557ZM66.3402 33.742L64.8402 29.2245C64.6815 28.763 64.3842 27.6762 63.9455 25.9654H63.8922C63.7175 26.7012 63.4362 27.788 63.0495 29.2245L61.5762 33.742H66.3402Z"
                                      fill="white"/>
                                <path d="M86.2164 34.5647C86.2164 36.6863 85.6284 38.3633 84.4524 39.5944C83.399 40.6903 82.091 41.2376 80.5297 41.2376C78.8444 41.2376 77.6337 40.6474 76.8964 39.467H76.843V46.0385H74.0004V32.5874C74.0004 31.2536 73.9644 29.8847 73.895 28.4807H76.395L76.5537 30.458H76.607C77.555 28.9682 78.9937 28.2246 80.9244 28.2246C82.4337 28.2246 83.6937 28.8057 84.7017 29.9692C85.7124 31.134 86.2164 32.6654 86.2164 34.5647ZM83.3204 34.6661C83.3204 33.4519 83.0404 32.4509 82.4777 31.6631C81.863 30.8415 81.0377 30.4307 80.003 30.4307C79.3017 30.4307 78.6644 30.6595 78.095 31.1106C77.5243 31.5656 77.151 32.1597 76.9763 32.8955C76.8883 33.2387 76.8444 33.5195 76.8444 33.7405V35.8205C76.8444 36.7279 77.1297 37.4936 77.7004 38.1189C78.271 38.7442 79.0124 39.0562 79.9244 39.0562C80.995 39.0562 81.8284 38.6532 82.4244 37.8498C83.0217 37.0451 83.3204 35.9843 83.3204 34.6661Z"
                                      fill="white"/>
                                <path d="M100.932 34.5647C100.932 36.6863 100.344 38.3633 99.167 39.5944C98.115 40.6903 96.807 41.2376 95.2456 41.2376C93.5603 41.2376 92.3496 40.6474 91.6136 39.467H91.5603V46.0385H88.7176V32.5874C88.7176 31.2536 88.6816 29.8847 88.6123 28.4807H91.1123L91.271 30.458H91.3243C92.271 28.9682 93.7096 28.2246 95.6416 28.2246C97.1496 28.2246 98.4096 28.8057 99.4203 29.9692C100.427 31.134 100.932 32.6654 100.932 34.5647ZM98.0363 34.6661C98.0363 33.4519 97.755 32.4509 97.1923 31.6631C96.5776 30.8415 95.755 30.4307 94.719 30.4307C94.0163 30.4307 93.3803 30.6595 92.8096 31.1106C92.239 31.5656 91.867 32.1597 91.6923 32.8955C91.6056 33.2387 91.5603 33.5195 91.5603 33.7405V35.8205C91.5603 36.7279 91.8456 37.4936 92.4136 38.1189C92.9843 38.7429 93.7256 39.0562 94.6403 39.0562C95.711 39.0562 96.5443 38.6532 97.1403 37.8498C97.7376 37.0451 98.0363 35.9843 98.0363 34.6661Z"
                                      fill="white"/>
                                <path d="M117.385 36.1037C117.385 37.5753 116.861 38.7726 115.809 39.6969C114.653 40.707 113.044 41.2114 110.976 41.2114C109.067 41.2114 107.536 40.8526 106.377 40.1337L107.036 37.8236C108.284 38.5594 109.653 38.9286 111.145 38.9286C112.216 38.9286 113.049 38.692 113.648 38.2214C114.244 37.7508 114.541 37.119 114.541 36.3312C114.541 35.6292 114.296 35.0377 113.804 34.558C113.315 34.0783 112.497 33.6324 111.356 33.2203C108.249 32.0906 106.697 30.4357 106.697 28.2595C106.697 26.8373 107.241 25.6712 108.331 24.7638C109.416 23.8551 110.864 23.4014 112.675 23.4014C114.289 23.4014 115.631 23.6757 116.701 24.223L115.991 26.4824C114.991 25.952 113.86 25.6868 112.595 25.6868C111.595 25.6868 110.813 25.9273 110.253 26.4057C109.78 26.8334 109.543 27.3547 109.543 27.9722C109.543 28.656 109.813 29.2215 110.357 29.6661C110.831 30.0769 111.691 30.5215 112.939 31.0012C114.465 31.6005 115.587 32.3012 116.308 33.1046C117.027 33.9054 117.385 34.9077 117.385 36.1037Z"
                                      fill="white"/>
                                <path d="M126.784 30.5604H123.651V36.6171C123.651 38.1576 124.203 38.9272 125.31 38.9272C125.818 38.9272 126.239 38.8843 126.572 38.7985L126.651 40.9032C126.091 41.1073 125.354 41.21 124.44 41.21C123.318 41.21 122.44 40.8759 121.807 40.209C121.176 39.5408 120.859 38.4202 120.859 36.8459V30.5578H118.992V28.4778H120.859V26.1937L123.651 25.3721V28.4778H126.784V30.5604Z"
                                      fill="white"/>
                                <path d="M140.922 34.6151C140.922 36.5326 140.359 38.1069 139.236 39.338C138.059 40.6055 136.496 41.2373 134.548 41.2373C132.671 41.2373 131.176 40.6302 130.062 39.416C128.947 38.2018 128.39 36.6691 128.39 34.8218C128.39 32.8887 128.963 31.3053 130.114 30.0742C131.262 28.8418 132.811 28.2256 134.759 28.2256C136.636 28.2256 138.147 28.8327 139.287 30.0482C140.378 31.2273 140.922 32.7496 140.922 34.6151ZM137.972 34.7048C137.972 33.5543 137.72 32.5676 137.21 31.7447C136.614 30.7489 135.762 30.2523 134.658 30.2523C133.515 30.2523 132.647 30.7502 132.051 31.7447C131.54 32.5689 131.288 33.5712 131.288 34.7568C131.288 35.9073 131.54 36.894 132.051 37.7156C132.666 38.7114 133.524 39.208 134.632 39.208C135.718 39.208 136.57 38.701 137.184 37.6896C137.708 36.8511 137.972 35.854 137.972 34.7048Z"
                                      fill="white"/>
                                <path d="M150.162 30.9182C149.88 30.8675 149.58 30.8415 149.266 30.8415C148.266 30.8415 147.492 31.2094 146.948 31.9465C146.475 32.5965 146.238 33.4181 146.238 34.41V40.9555H143.396L143.423 32.4093C143.423 30.9715 143.387 29.6624 143.316 28.482H145.792L145.896 30.8688H145.975C146.275 30.0485 146.748 29.3881 147.396 28.8928C148.03 28.4469 148.714 28.2246 149.451 28.2246C149.714 28.2246 149.951 28.2428 150.162 28.2753V30.9182Z"
                                      fill="white"/>
                                <path d="M162.875 34.1279C162.875 34.6245 162.842 35.0431 162.771 35.385H154.243C154.276 36.6174 154.688 37.5599 155.48 38.2099C156.199 38.791 157.128 39.0822 158.27 39.0822C159.532 39.0822 160.684 38.8859 161.72 38.492L162.166 40.416C160.955 40.9308 159.526 41.1869 157.876 41.1869C155.892 41.1869 154.335 40.6175 153.202 39.48C152.071 38.3425 151.504 36.815 151.504 34.8988C151.504 33.0177 152.031 31.4512 153.086 30.2019C154.19 28.8681 155.682 28.2012 157.559 28.2012C159.403 28.2012 160.799 28.8681 161.747 30.2019C162.498 31.2614 162.875 32.5718 162.875 34.1279ZM160.164 33.409C160.183 32.5874 159.998 31.8776 159.612 31.2783C159.12 30.5074 158.364 30.1226 157.347 30.1226C156.418 30.1226 155.662 30.4983 155.084 31.2523C154.611 31.8516 154.33 32.5705 154.243 33.4077H160.164V33.409Z"
                                      fill="white"/>
                            </svg></a>
                    </div>
                </div>
                <div class="mt-4 pt-2">
                    <a href="#" class="text-decoration-none">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="38" height="38" rx="5" fill="#2D74EF" fill-opacity="0.08"/>
                            <path d="M11 24V26C11 26.5304 11.2107 27.0391 11.5858 27.4142C11.9609 27.7893 12.4696 28 13 28H25C25.5304 28 26.0391 27.7893 26.4142 27.4142C26.7893 27.0391 27 26.5304 27 26V24"
                                  stroke="#2D74EF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 18L19 23L24 18" stroke="#2D74EF" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M19 11V23" stroke="#2D74EF" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <p class="d-inline text-secondary fw-semibold">Download the Toleg app</p>
                    </a>
                </div>
            </div>
            <div class="col-7 display-1">
                <img class="img-fluid" src="{{asset('img/phone/intro_phones.png')}}" alt="">
            </div>
        </div>
        <div class="row mt-5 mb-5 pb-5 pt-5">
            <div class="col row justify-content-center">
                <div class="row rounded-5 justify-content-center bg-globe align-items-center size-100">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0001 40.3337C32.1253 40.3337 40.3334 32.1256 40.3334 22.0003C40.3334 11.8751 32.1253 3.66699 22.0001 3.66699C11.8749 3.66699 3.66675 11.8751 3.66675 22.0003C3.66675 32.1256 11.8749 40.3337 22.0001 40.3337Z"
                              stroke="#926AC1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.66675 22H40.3334" stroke="#926AC1" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M22.0001 3.66699C26.5858 8.68731 29.1918 15.2024 29.3334 22.0003C29.1918 28.7983 26.5858 35.3134 22.0001 40.3337C17.4144 35.3134 14.8084 28.7983 14.6667 22.0003C14.8084 15.2024 17.4144 8.68731 22.0001 3.66699V3.66699Z"
                              stroke="#926AC1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <p class="h4">Telekom Internet</p>
                    <p class="text-secondary fw-semibold">Telekom internet hasabyňyz doldurmak aňsat.</p>
                </div>
            </div>
            <div class="col row justify-content-center">
                <div class="row rounded-5 justify-content-center bg-smartphone align-items-center size-100">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.1665 3.66699H12.8332C10.8081 3.66699 9.1665 5.30861 9.1665 7.33366V36.667C9.1665 38.692 10.8081 40.3337 12.8332 40.3337H31.1665C33.1915 40.3337 34.8332 38.692 34.8332 36.667V7.33366C34.8332 5.30861 33.1915 3.66699 31.1665 3.66699Z"
                              stroke="#20C4A0" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 33H22.0183" stroke="#20C4A0" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <p class="h4">TmCell Hasabyny</p>
                    <p class="text-secondary fw-semibold">Tmcell hasabyňyzy doldurmak aňsat.</p>
                </div>
            </div>
            <div class="col row justify-content-center">
                <div class="row rounded-5 bg-tabler justify-content-center align-items-center size-100">
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.5 21.6667L43.3648 16.7353C43.6951 16.5703 44.062 16.4924 44.4308 16.509C44.7996 16.5256 45.1581 16.6362 45.4721 16.8303C45.7862 17.0243 46.0455 17.2954 46.2254 17.6178C46.4053 17.9402 46.4998 18.3032 46.5 18.6723V33.3277C46.4998 33.6969 46.4053 34.0599 46.2254 34.3823C46.0455 34.7046 45.7862 34.9757 45.4721 35.1698C45.1581 35.3638 44.7996 35.4744 44.4308 35.491C44.062 35.5076 43.6951 35.4297 43.3648 35.2647L33.5 30.3333V21.6667Z"
                              stroke="#FF9200" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M28.7575 13H11.4242C9.03092 13 7.09082 14.9401 7.09082 17.3333V34.6667C7.09082 37.0599 9.03092 39 11.4242 39H28.7575C31.1507 39 33.0908 37.0599 33.0908 34.6667V17.3333C33.0908 14.9401 31.1507 13 28.7575 13Z"
                              stroke="#FF9200" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <p class="h4">"Belet film" hyzmaty</p>
                    <p class="text-secondary fw-semibold">Belet film hasabyňyzy doldurmak aňsat.</p>
                </div>
            </div>
        </div>
    </div>

    {{--phones--}}
    <div class="container-fluid">

        <div class="mt-5 pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="row justify-content-center pt-5 align-items-center bg-phone1 rounded-end-5">
                        <div class="col-5 pt-3">
                            <img class="img-fluid d-block mx-auto" src="{{asset('img/phone/phone1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <p class="fw-semibold h1">Bu durmushda beyle <br> sada <span class="ui_ux">Ui/Ux</span> gormedim</p>
                            <p>"Töleg" programmasynyň üstü bilen telekom <br>   internet hasabyňyz doldurmak aňsat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-8 ">
                            <p class="fw-bold h1">Ähli <span class="text-primary">maglumatlary</span> <br> gorap bolýar</p>
                            <p>"Töleg" programmasynyň üsti bilen telekom <br> internet hasabyňyzy doldurmak aňsat.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-phone2 px-0 row justify-content-center pt-5 rounded-start-5">
                        <div class="col-5 pt-3">
                            <img src="{{asset('img/phone/phone2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection