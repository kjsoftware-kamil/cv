<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'CV') }}</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gunjala+Gondi:wght@400..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=SN+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
        
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            
            :root {
                --bg: #ffffff;
                --text-primary: #1a1a1a;
                --text-secondary: #666666;
                --text-muted: #999999;
                --border: #e5e5e5;
                --accent: #0066ff;
                --card-bg: #fafafa;
            }
            
            .dark {
                --bg: #0a0a0a;
                --text-primary: #ffffff;
                --text-secondary: #b3b3b3;
                --text-muted: #666666;
                --border: #2a2a2a;
                --accent: #3399ff;
                --card-bg: #151515;
            }
            
            html { scroll-behavior: smooth; }
            
            body {
                font-family: 'Roboto', -apple-system, BlinkMacSystemFont, sans-serif;
                background: var(--bg);
                color: var(--text-primary);
                line-height: 1.6;
                transition: background-color 0.3s ease, color 0.3s ease;
            }
            
            /* Header */
            header {
                position: sticky;
                top: 0;
                z-index: 1000;
                background: var(--bg);
                border-bottom: 1px solid var(--border);
                backdrop-filter: blur(10px);
                background: rgba(255, 255, 255, 0.8);
            }
            
            .dark header {
                background: rgba(10, 10, 10, 0.8);
            }
            
            .header-content {
                max-width: 1200px;
                margin: 0 auto;
                padding: 1.25rem 2rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .logo {
                font-size: 1.125rem;
                font-weight: 600;
                color: var(--text-primary);
                text-decoration: none;
                letter-spacing: -0.02em;
            }
            
            nav {
                display: flex;
                gap: 2rem;
                align-items: center;
            }
            
            nav a {
                color: var(--text-secondary);
                text-decoration: none;
                font-size: 0.9375rem;
                font-weight: 500;
                transition: color 0.2s ease;
                position: relative;
            }
            
            nav a:hover, nav a.active {
                color: var(--text-primary);
            }
            
            nav a.active::after {
                content: '';
                position: absolute;
                bottom: -1.5rem;
                left: 0;
                right: 0;
                height: 2px;
                background: var(--accent);
            }
            
            .theme-toggle {
                background: none;
                border: none;
                cursor: pointer;
                padding: 0.5rem;
                color: var(--text-secondary);
                transition: color 0.2s ease;
            }
            
            .theme-toggle:hover {
                color: var(--text-primary);
            }
            
            /* Hero Section */
            .hero {
                width: 100%;
                padding: 0;
                position: relative;
                overflow: hidden;
            }
            
            .hero-gradient {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(to right, #3b82f6, #e6ebf5ff 40%, #ffffffff 100%);
                pointer-events: none;
                z-index: 0;
            }
            
            .dark .hero-gradient {
                background: linear-gradient(to right, #1e3a8a, #2563eb 40%, #0f0f0f 100%);
            }
            
            .hero-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
                min-height: calc(100vh - 80px);
                max-width: 1400px;
                margin: 0 auto;
                padding: 4rem 4rem;
                position: relative;
                z-index: 1;
            }
            
            .hero-text {
                padding-left: 2rem;
            }
            
            .hero h1 {
                font-size: clamp(2.5rem, 5vw, 4.5rem);
                font-weight: 700;
                letter-spacing: -0.03em;
                line-height: 1.1;
                margin-bottom: 1.5rem;
                color: #ffffff;
                animation: fadeInUp 0.6s ease-out;
            }
            
            .hero h2 {
                font-size: clamp(1.25rem, 2.5vw, 1.875rem);
                font-weight: 400;
                color: rgba(255, 255, 255, 0.47);
                margin-bottom: 2.5rem;
                line-height: 1.5;
                animation: fadeInUp 0.6s ease-out 0.1s both;
            }
            
            .hero-description {
                color: rgba(255, 255, 255, 1);
                font-size: 1.125rem;
                line-height: 1.7;
                margin-bottom: 2.5rem;
                animation: fadeInUp 0.6s ease-out 0.2s both;
            }
            
            .hero-image-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 2rem;
                animation: fadeInUp 0.6s ease-out 0.3s both;
            }
            
            .hero-image {
                width: 100%;
                max-width: 480px;
                height: auto;
                aspect-ratio: 0.85;
                border-radius: 1.5rem;
                object-fit: cover;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .hero-image:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
            }
            
            .cta-button {
                display: inline-block;
                padding: 1.125rem 2.5rem;
                background: var(--text-primary);
                color: var(--bg);
                text-decoration: none;
                border-radius: 0.5rem;
                font-weight: 600;
                font-size: 1.0625rem;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                animation: fadeInUp 0.6s ease-out 0.4s both;
            }
            
            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            }
            
            .social-links {
                display: flex;
                gap: 1rem;
                margin-top: 2rem;
                animation: fadeInUp 0.6s ease-out 0.5s both;
            }
            
            .social-links a {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 0.5rem;
                background: var(--card-bg);
                color: var(--text-secondary);
                transition: all 0.2s ease;
                border: 1px solid var(--border);
            }
            
            .social-links a:hover {
                background: var(--text-primary);
                color: var(--bg);
                border-color: var(--text-primary);
                transform: translateY(-2px);
            }
            
            .hero .social-links a {
                background: rgba(255, 255, 255, 0.15);
                color: rgba(255, 255, 255, 0.9);
                border-color: rgba(255, 255, 255, 0.25);
            }
            
            .hero .social-links a:hover {
                background: #ffffff;
                color: #1e3a8a;
                border-color: #ffffff;
            }
            
            /* Section Styles */
            .section {
                max-width: 1200px;
                margin: 0 auto;
                padding: 5rem 2rem;
                border-top: 1px solid var(--border);
            }
            
            .section-title {
                font-size: 2.25rem;
                font-weight: 700;
                letter-spacing: -0.02em;
                margin-bottom: 0.75rem;
            }
            
            .section-subtitle {
                font-size: 1.125rem;
                color: var(--text-secondary);
                margin-bottom: 3rem;
            }
            
            /* Skills Section Background */
            .skills-section {
                background: #f5f7fa;
                max-width: none;
                padding-left: calc((100vw - 1200px) / 2 + 2rem);
                padding-right: calc((100vw - 1200px) / 2 + 2rem);
            }
            
            .dark .skills-section {
                background: #111827;
            }
            
            /* Services Grid */
            .services-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 2rem;
                margin-top: 3rem;
            }
            
            .service-card {
                background: var(--card-bg);
                padding: 2rem;
                border-radius: 0.75rem;
                border: 1px solid var(--border);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }
            
            .service-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
            }
            
            .service-icon {
                width: 3rem;
                height: 3rem;
                object-fit: contain;
                margin-bottom: 1rem;
                border-radius: 0.5rem;
            }
            
            .service-number {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 3rem;
                height: 3rem;
                background: var(--card-bg);
                color: var(--accent);
                border-radius: 0.5rem;
                font-weight: 700;
                font-size: 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid var(--border);
            }
            
            .service-card h3 {
                font-size: 1.25rem;
                font-weight: 600;
                margin-bottom: 0.75rem;
            }
            
            .service-card p {
                color: var(--text-secondary);
                font-size: 0.9375rem;
                line-height: 1.6;
            }
            
            /* Skills/Tech Stack */
            .tech-stack {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
                gap: 2rem;
                margin-top: 3rem;
            }
            
            .tech-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
                opacity: 0;
                animation: fadeIn 0.5s ease-out forwards;
            }
            
            .tech-item:nth-child(1) { animation-delay: 0.05s; }
            .tech-item:nth-child(2) { animation-delay: 0.1s; }
            .tech-item:nth-child(3) { animation-delay: 0.15s; }
            .tech-item:nth-child(4) { animation-delay: 0.2s; }
            .tech-item:nth-child(5) { animation-delay: 0.25s; }
            .tech-item:nth-child(6) { animation-delay: 0.3s; }
            .tech-item:nth-child(7) { animation-delay: 0.35s; }
            .tech-item:nth-child(8) { animation-delay: 0.4s; }
            
            .tech-icon {
                width: 64px;
                height: 64px;
                object-fit: contain;
                filter: grayscale(100%);
                opacity: 0.7;
                transition: all 0.3s ease;
            }
            
            .tech-item:hover .tech-icon {
                filter: grayscale(0%);
                opacity: 1;
                transform: scale(1.1);
            }
            
            .tech-name {
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-secondary);
            }
            
            /* Testimonials */
            .testimonials {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin-top: 3rem;
            }
            
            .testimonial {
                background: var(--card-bg);
                padding: 2rem;
                border-radius: 0.75rem;
                border: 1px solid var(--border);
            }
            
            .testimonial-quote {
                font-size: 1.125rem;
                font-weight: 600;
                margin-bottom: 1rem;
                line-height: 1.5;
            }
            
            .testimonial-text {
                color: var(--text-secondary);
                margin-bottom: 1.5rem;
                line-height: 1.7;
            }
            
            .testimonial-author {
                display: flex;
                align-items: center;
                gap: 1rem;
            }
            
            .author-image {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                object-fit: cover;
            }
            
            .author-info h4 {
                font-size: 0.9375rem;
                font-weight: 600;
                margin-bottom: 0.25rem;
            }
            
            .author-info p {
                font-size: 0.875rem;
                color: var(--text-muted);
            }
            
            /* Projects Grid */
            .projects-section-layout {
                display: grid;
                grid-template-columns: 250px 1fr;
                gap: 3rem;
                align-items: start;
            }
            
            .projects-section-title {
                font-size: 3rem;
                font-weight: 700;
                color: var(--text-primary);
                position: sticky;
                top: 6rem;
            }
            
            .projects-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            
            .project-card {
                position: relative;
                padding: 2rem;
                overflow: hidden;
                border-bottom: 1px solid var(--border);
                min-height: 180px;
            }
            
            .project-number {
                position: absolute;
                top: -0.25rem;
                right: 0;
                font-size: 7rem;
                font-weight: 800;
                color: var(--text-primary);
                opacity: 0.04;
                line-height: 1;
                pointer-events: none;
                user-select: none;
            }
            
            .project-icon {
                width: 2.75rem;
                height: 2.75rem;
                object-fit: contain;
                margin-bottom: 0.75rem;
                border-radius: 0.25rem;
            }
            
            .project-icon-placeholder {
                width: 2rem;
                height: 2rem;
                background: var(--accent);
                color: white;
                border-radius: 0.375rem;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                font-size: 0.875rem;
                margin-bottom: 0.75rem;
            }
            
            .project-technologies {
                font-size: 0.8125rem;
                color: var(--text-secondary);
                margin-bottom: 0.25rem;
            }
            
            .project-name {
                font-size: 1.125rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 0.5rem;
                display: inline-flex;
                align-items: center;
                gap: 0.35rem;
            }
            
            .project-name a {
                color: inherit;
                text-decoration: none;
            }
            
            .project-name a:hover {
                text-decoration: underline;
            }
            
            .project-link-arrow {
                display: inline-block;
                width: 14px;
                height: 14px;
                flex-shrink: 0;
            }
            
            .project-description {
                font-size: 0.9375rem;
                color: var(--text-secondary);
                line-height: 1.6;
            }
            
            @media (max-width: 900px) {
                .projects-section-layout {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }
                .projects-section-title {
                    position: static;
                }
                .projects-grid {
                    grid-template-columns: 1fr;
                }
            }
            
            /* Contact Section */
            .contact-section {
                background: #f0f4f8;
                padding: 5rem 2rem;
                margin-top: 3rem;
            }
            
            .dark .contact-section {
                background: #111827;
            }
            
            .contact-wrapper {
                max-width: 1100px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: 1fr 1.2fr;
                gap: 4rem;
                align-items: start;
            }
            
            .contact-heading {
                font-size: 2rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 1rem;
            }
            
            .contact-text {
                color: var(--text-secondary);
                font-size: 1rem;
                line-height: 1.7;
                margin-bottom: 2rem;
            }
            
            .contact-details {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .contact-detail-item {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                color: var(--text-secondary);
                font-size: 0.9375rem;
            }
            
            .contact-detail-item svg {
                color: var(--accent);
                flex-shrink: 0;
            }
            
            .contact-detail-item a {
                color: var(--text-secondary);
                text-decoration: none;
                transition: color 0.2s;
            }
            
            .contact-detail-item a:hover {
                color: var(--accent);
            }
            
            .contact-success {
                background: #d1fae5;
                color: #065f46;
                padding: 1rem;
                border-radius: 0.5rem;
                margin-top: 1.5rem;
                font-size: 0.9375rem;
            }
            
            .dark .contact-success {
                background: #064e3b;
                color: #a7f3d0;
            }
            
            .contact-form {
                display: flex;
                flex-direction: column;
                gap: 1.25rem;
            }
            
            .contact-form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.25rem;
            }
            
            .contact-form-group {
                display: flex;
                flex-direction: column;
                gap: 0.375rem;
            }
            
            .contact-label {
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-primary);
            }
            
            .contact-required {
                color: var(--accent);
            }
            
            .contact-input {
                width: 100%;
                padding: 0.75rem 1rem;
                border: 1px solid var(--border);
                border-radius: 0.5rem;
                background: var(--bg);
                color: var(--text-primary);
                font-family: inherit;
                font-size: 0.9375rem;
                transition: border-color 0.2s, box-shadow 0.2s;
            }
            
            .contact-input:focus {
                outline: none;
                border-color: var(--accent);
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }
            
            .contact-input::placeholder {
                color: var(--text-muted);
            }
            
            .contact-textarea {
                resize: vertical;
                min-height: 120px;
            }
            
            .contact-error {
                color: #dc3545;
                font-size: 0.8125rem;
                margin-top: 0.125rem;
            }
            
            .contact-submit {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                padding: 0.875rem 2rem;
                background: var(--accent);
                color: white;
                border: none;
                border-radius: 0.5rem;
                font-family: inherit;
                font-size: 1rem;
                font-weight: 600;
                cursor: pointer;
                transition: background 0.2s, transform 0.2s;
                align-self: flex-start;
            }
            
            .contact-submit:hover {
                background: #0052cc;
                transform: translateY(-1px);
            }
            
            .dark .contact-submit:hover {
                background: #2680ff;
            }
            
            @media (max-width: 768px) {
                .contact-wrapper {
                    grid-template-columns: 1fr;
                    gap: 2.5rem;
                }
                .contact-form-row {
                    grid-template-columns: 1fr;
                }
            }
            
            /* Footer */
            footer {
                background: var(--card-bg);
                border-top: 1px solid var(--border);
                padding: 3rem 2rem;
                margin-top: 0;
            }
            
            .footer-content {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                gap: 2rem;
            }
            
            .footer-links {
                display: flex;
                gap: 2rem;
                flex-wrap: wrap;
            }
            
            .footer-links a {
                color: var(--text-secondary);
                text-decoration: none;
                font-size: 0.9375rem;
                transition: color 0.2s ease;
            }
            
            .footer-links a:hover {
                color: var(--text-primary);
            }
            
            .copyright {
                color: var(--text-muted);
                font-size: 0.875rem;
            }
            
            /* Mobile Navigation */
            .mobile-toggle {
                display: none;
                background: none;
                border: none;
                cursor: pointer;
                padding: 0.5rem;
                color: var(--text-secondary);
            }
            
            /* Animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            
            .fade-in {
                opacity: 0;
                animation: fadeIn 0.6s ease-out forwards;
            }
            
            .scroll-reveal {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            }
            
            .scroll-reveal.visible {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Responsive */
            @media (max-width: 968px) {
                .hero-content {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                    min-height: auto;
                    padding: 3rem 1.5rem;
                }
                
                .hero-text {
                    padding-left: 0;
                    text-align: center;
                }
                
                .hero-image-wrapper {
                    order: -1;
                    padding: 1rem;
                }
                
                .hero-image {
                    max-width: 350px;
                }
            }
            
            @media (max-width: 768px) {
                nav { display: none; }
                .mobile-toggle { display: block; }
                
                nav.mobile-open {
                    display: flex;
                    flex-direction: column;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    background: var(--bg);
                    border-bottom: 1px solid var(--border);
                    padding: 1rem 2rem;
                    gap: 0.25rem;
                }
                
                nav.mobile-open a.active::after {
                    display: none;
                }
                
                nav.mobile-open a {
                    padding: 0.5rem 1rem;
                    border-radius: 0.5rem;
                }
                
                nav.mobile-open a.active {
                    background: rgba(59, 130, 246, 0.08);
                    color: var(--accent);
                }
                
                .hero h1 {
                    font-size: 2.25rem;
                }
                
                .hero h2 {
                    font-size: 1.125rem;
                }
                
                .hero-description {
                    font-size: 1rem;
                }
                
                .hero-image {
                    max-width: 280px;
                }
                
                .section { padding: 3rem 1.5rem; }
                .career-grid { grid-template-columns: 1fr; gap: 2rem; }
                .services-grid { grid-template-columns: 1fr; }
                .tech-stack { grid-template-columns: repeat(auto-fill, minmax(80px, 1fr)); gap: 1.5rem; }
                .testimonials { grid-template-columns: 1fr; }
                .projects-grid { grid-template-columns: 1fr; }
                .timeline { padding-left: 1.5rem; }
                .timeline-item { padding-left: 2rem; }
                
                /* Scale down glow blobs for mobile */
                .glow-blob-1 {
                    width: 300px;
                    height: 300px;
                }
                .glow-blob-2 {
                    width: 250px;
                    height: 250px;
                }
                .glow-blob-3 {
                    width: 220px;
                    height: 220px;
                }
                
                /* Scale down projects light beam for mobile */
                .light-beam {
                    width: 100%;
                    height: 300px;
                }
                .light-accent-left {
                    width: 180px;
                    height: 180px;
                }
                .light-accent-right {
                    width: 150px;
                    height: 150px;
                }
            }
            
            /* Career Grid - Experience + Education side by side */
            .career-section-layout {
                display: grid;
                grid-template-columns: 250px 1fr;
                gap: 3rem;
                align-items: start;
            }
            
            .career-section-title {
                font-size: 7rem;
                font-weight: 700;
                color: var(--text-primary);
                position: sticky;
                top: 6rem;
                writing-mode: vertical-rl;
                text-orientation: mixed;
                transform: rotate(180deg);
            }
            
            .career-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
            }
            
            .career-column {
                min-width: 0;
            }
            
            .career-section-layout {
                position: relative;
            }
            
            .career-bg-text {
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
                font-size: 10rem;
                font-weight: 800;
                color: var(--text-primary);
                opacity: 0.03;
                line-height: 1;
                pointer-events: none;
                user-select: none;
                text-align: center;
                z-index: 0;
                letter-spacing: 0.05em;
            }
            
            .career-section-layout > *:not(.career-bg-text) {
                position: relative;
                z-index: 1;
            }
            
            .career-column-title {
                font-size: 1.125rem;
                font-weight: 600;
                color: var(--text-primary);
                margin-bottom: 1.5rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding-bottom: 0.75rem;
                border-bottom: 2px solid var(--border);
            }
            
            .career-column-title svg {
                flex-shrink: 0;
            }
            
            .timeline-compact {
                display: flex;
                flex-direction: column;
                gap: 0;
            }
            
            .timeline-item {
                position: relative;
                padding: 1.25rem 0;
                border-bottom: 1px solid var(--border);
            }
            
            .timeline-item:last-child {
                border-bottom: none;
            }
            
            .timeline-dot {
                display: none;
            }
            
            .timeline-card {
                padding: 0;
            }
            
            .timeline-header {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                gap: 1rem;
                margin-bottom: 0.375rem;
            }
            
            .timeline-title {
                font-size: 1rem;
                font-weight: 600;
                line-height: 1.4;
                color: var(--text-primary);
            }
            
            .timeline-badge {
                font-size: 0.8125rem;
                font-weight: 500;
                white-space: nowrap;
                flex-shrink: 0;
                color: var(--text-muted);
            }
            
            .timeline-badge.current {
                color: var(--accent);
            }
            
            .timeline-meta {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 0.5rem;
                margin-bottom: 0.5rem;
                font-size: 0.8125rem;
                color: var(--text-secondary);
            }
            
            .timeline-company,
            .timeline-institution {
                font-weight: 600;
                color: var(--text-primary);
            }
            
            .timeline-separator {
                width: 3px;
                height: 3px;
                border-radius: 50%;
                background: var(--text-muted);
            }
            
            .timeline-location {
                display: inline-flex;
                align-items: center;
                gap: 0.25rem;
            }
            
            .timeline-description {
                color: var(--text-secondary);
                font-size: 0.875rem;
                line-height: 1.6;
            }
            
            .timeline-degree {
                color: var(--text-secondary);
                font-size: 0.8125rem;
                margin-bottom: 0.25rem;
            }
            
            @media (max-width: 900px) {
                .career-section-layout {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }
                .career-section-title {
                    position: static;
                    writing-mode: horizontal-tb;
                    transform: none;
                    font-size: 2.5rem;
                }
                .career-grid {
                    grid-template-columns: 1fr;
                }
            }
            
            /* Toast Notification */
            .toast {
                position: fixed;
                top: 1.5rem;
                right: 1.5rem;
                background: #059669;
                color: #fff;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
                z-index: 9999;
                animation: toastIn 0.4s ease, toastOut 0.4s ease 4s forwards;
                font-size: 0.9375rem;
                font-weight: 500;
                max-width: 400px;
            }
            
            .toast-close {
                background: none;
                border: none;
                color: #fff;
                cursor: pointer;
                padding: 0;
                opacity: 0.8;
                transition: opacity 0.2s;
            }
            
            .toast-close:hover {
                opacity: 1;
            }
            
            @keyframes toastIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            
            @keyframes toastOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
            
            /* ===== Sections with Glow ===== */
            .section-glow {
                max-width: none;
                padding-left: max(1.5rem, calc((100vw - 1200px) / 2 + 2rem));
                padding-right: max(1.5rem, calc((100vw - 1200px) / 2 + 2rem));
                position: relative;
                overflow: hidden;
            }
            
            /* ===== Ambient Glow Blobs ===== */
            .glow-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 0;
                overflow: hidden;
            }
            
            .glow-blob {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.12;
                animation: blobFloat 20s ease-in-out infinite;
            }
            
            .dark .glow-blob {
                opacity: 0.07;
            }
            
            .glow-blob-1 {
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, #3b82f6, #8b5cf6);
                top: -10%;
                right: -5%;
                animation-delay: 0s;
            }
            
            .glow-blob-2 {
                width: 500px;
                height: 500px;
                background: radial-gradient(circle, #06b6d4, #3b82f6);
                top: 40%;
                left: -8%;
                animation-delay: -7s;
                animation-duration: 25s;
            }
            
            .glow-blob-3 {
                width: 450px;
                height: 450px;
                background: radial-gradient(circle, #8b5cf6, #ec4899);
                bottom: 5%;
                right: 10%;
                animation-delay: -14s;
                animation-duration: 22s;
            }
            
            @keyframes blobFloat {
                0%, 100% { transform: translate(0, 0) scale(1); }
                25% { transform: translate(30px, -40px) scale(1.05); }
                50% { transform: translate(-20px, 20px) scale(0.95); }
                75% { transform: translate(40px, 30px) scale(1.02); }
            }
            
            /* ===== Projects Light Beam ===== */
            .projects-glow {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 0;
                overflow: hidden;
            }
            
            .light-beam {
                position: absolute;
                top: -60%;
                left: 50%;
                transform: translateX(-50%);
                width: 80%;
                height: 500px;
                background: radial-gradient(ellipse at center top, rgba(59, 130, 246, 0.10) 0%, rgba(6, 182, 212, 0.05) 40%, transparent 70%);
                animation: beamPulse 8s ease-in-out infinite;
            }
            
            .dark .light-beam {
                background: radial-gradient(ellipse at center top, rgba(59, 130, 246, 0.14) 0%, rgba(6, 182, 212, 0.07) 40%, transparent 70%);
            }
            
            .light-accent-left {
                position: absolute;
                bottom: 5%;
                left: 0;
                width: 300px;
                height: 300px;
                background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
                filter: blur(60px);
                border-radius: 50%;
                animation: accentFloat 15s ease-in-out infinite;
            }
            
            .light-accent-right {
                position: absolute;
                top: 10%;
                right: -5%;
                width: 250px;
                height: 250px;
                background: radial-gradient(circle, rgba(6, 182, 212, 0.08) 0%, transparent 70%);
                filter: blur(60px);
                border-radius: 50%;
                animation: accentFloat 15s ease-in-out infinite reverse;
            }
            
            .dark .light-accent-left {
                background: radial-gradient(circle, rgba(59, 130, 246, 0.12) 0%, transparent 70%);
            }
            
            .dark .light-accent-right {
                background: radial-gradient(circle, rgba(6, 182, 212, 0.12) 0%, transparent 70%);
            }
            
            @keyframes beamPulse {
                0%, 100% { opacity: 1; transform: translateX(-50%) scale(1); }
                50% { opacity: 0.7; transform: translateX(-50%) scale(1.05); }
            }
            
            @keyframes accentFloat {
                0%, 100% { transform: translate(0, 0); }
                50% { transform: translate(20px, -15px); }
            }
            
            .project-card {
                position: relative;
            }
            
            /* Contact submit button glow */
            .contact-submit {
                position: relative;
            }
            
            .contact-submit::after {
                content: '';
                position: absolute;
                inset: 0;
                border-radius: inherit;
                opacity: 0;
                transition: opacity 0.3s ease;
                box-shadow: 0 0 25px rgba(0, 102, 255, 0.4), 0 0 50px rgba(0, 102, 255, 0.15);
                pointer-events: none;
            }
            
            .contact-submit:hover::after {
                opacity: 1;
            }
            
            /* CTA button glow */
            .cta-button {
                position: relative;
            }
            
            .cta-button::after {
                content: '';
                position: absolute;
                inset: 0;
                border-radius: inherit;
                opacity: 0;
                transition: opacity 0.3s ease;
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.2), 0 0 60px rgba(59, 130, 246, 0.15);
                pointer-events: none;
            }
            
            .cta-button:hover::after {
                opacity: 1;
            }
            
            /* Ensure main content stays above glow blobs */
            main, footer {
                position: relative;
                z-index: 2;
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="header-content">
                <a href="/" class="logo">{{ config('app.name', 'Your Name') }}</a>
                
                <nav id="nav">
                    @foreach($sections as $navSection)
                        @if($navSection->type !== 'education')
                            <a href="#{{ $navSection->type }}" class="nav-link" data-section="{{ $navSection->type }}">
                                {{ $navSection->trans('title') }}
                            </a>
                        @endif
                    @endforeach
                    <a href="{{ route('about') }}" class="nav-link">{{ __('About') }}</a>
                </nav>
                
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <a href="{{ route('locale.switch', app()->getLocale() === 'en' ? 'nl' : 'en') }}" style="color: var(--text-secondary); font-size: 0.9375rem; font-weight: 500; text-decoration: none;">
                        {{ app()->getLocale() === 'en' ? 'NL' : 'EN' }}
                    </a>
                    
                    <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
                        <svg id="sun-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg id="moon-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>
                    
                    <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main>
            @if($sections->isEmpty())
                <div class="hero">
                    <h1>{{ __('Welcome') }}</h1>
                    <h2>{{ __('No content yet. Add sections from the admin panel.') }}</h2>
                </div>
            @else
                @foreach($sections as $section)
                    @if($section->type === 'hero')
                        <section class="hero" id="{{ $section->type }}">
                            <div class="hero-gradient"></div>
                            <div class="hero-content">
                                <div class="hero-text">
                                    <h1>{{ $section->trans('title') }}</h1>
                                    @if($section->trans('subtitle'))
                                        <h2>{{ $section->trans('subtitle') }}</h2>
                                    @endif
                                    @if($section->trans('body'))
                                        <div class="hero-description">
                                            {!! $section->trans('body') !!}
                                        </div>
                                    @endif
                                    <div>
                                        <a href="#contact" class="cta-button">{{ __('Hire me') }}</a>
                                        
                                        @if($personalInfo && ($personalInfo->linkedin || $personalInfo->github))
                                            <div class="social-links">
                                                @if($personalInfo->linkedin)
                                                    <a href="{{ $personalInfo->linkedin }}" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                                                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                        </svg>
                                                    </a>
                                                @endif
                                                @if($personalInfo->github)
                                                    <a href="{{ $personalInfo->github }}" target="_blank" rel="noopener noreferrer" title="GitHub">
                                                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                                                        </svg>
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="hero-image-wrapper">
                                    @if($section->image)
                                        <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}" class="hero-image">
                                    @else
                                        <div class="hero-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 4rem; font-weight: 700;">
                                            {{ substr($section->trans('title'), 0, 1) }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                    @elseif($section->type === 'skills')
                        <section class="section scroll-reveal skills-section" id="{{ $section->type }}">
                            <h2 class="section-title">{{ $section->trans('title') }}</h2>
                            @if($section->trans('subtitle'))
                                <p class="section-subtitle">{{ $section->trans('subtitle') }}</p>
                            @endif
                            
                            <div class="services-grid">
                                @foreach($skills->take(6) as $skill)
                                    <div class="service-card">
                                        @if($skill->icon)
                                            <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->trans('name') }}" class="service-icon">
                                        @else
                                            <span class="service-number">{{ substr($skill->trans('name'), 0, 1) }}</span>
                                        @endif
                                        <h3>{{ $skill->trans('name') }}</h3>
                                        <p>{{ $skill->trans('category') ?: __('Skill level') }}: {{ $skill->proficiency }}%</p>
                                    </div>
                                @endforeach
                            </div>
                            
                            @if($skills->count() > 6)
                                <div class="tech-stack">
                                    @foreach($skills->skip(6) as $skill)
                                        <div class="tech-item">
                                            @if($skill->icon)
                                                <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->trans('name') }}" class="tech-icon">
                                            @else
                                                <div style="width: 64px; height: 64px; background: var(--card-bg); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.5rem; color: var(--accent);">
                                                    {{ substr($skill->trans('name'), 0, 1) }}
                                                </div>
                                            @endif
                                            <span class="tech-name">{{ $skill->trans('name') }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </section>
                    @elseif($section->type === 'experience')
                        <section class="section scroll-reveal section-glow" id="{{ $section->type }}">
                            <div class="glow-container">
                                <div class="glow-blob glow-blob-1"></div>
                                <div class="glow-blob glow-blob-2"></div>
                            </div>
                            <div class="career-section-layout">
                                <span class="career-bg-text">{{ __('Experience') }} & {{ __('Education') }}</span>
                                <div>
                                    <h2 class="career-section-title">{{ $section->trans('title') }}</h2>
                                    @if($section->trans('subtitle'))
                                        <p class="section-subtitle" style="margin-top: 0.5rem;">{{ $section->trans('subtitle') }}</p>
                                    @endif
                                </div>
                            <div class="career-grid">
                                <!-- Experience Column -->
                                <div class="career-column">
                                    <h3 class="career-column-title">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                        {{ __('Experience') }}
                                    </h3>
                                    <div class="timeline-compact">
                                        @foreach($experiences as $exp)
                                            <div class="timeline-item {{ $exp->is_current ? 'current' : '' }}">
                                                <div class="timeline-dot"></div>
                                                <div class="timeline-card">
                                                    <div class="timeline-header">
                                                        <h4 class="timeline-title">{{ $exp->trans('title') }}</h4>
                                                        @if($exp->is_current)
                                                            <span class="timeline-badge current">● {{ __('Present') }}</span>
                                                        @else
                                                            <span class="timeline-badge past">{{ $exp->start_date->format('Y') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="timeline-meta">
                                                        <span class="timeline-company">{{ $exp->company }}</span>
                                                        @if($exp->location)
                                                            <span class="timeline-separator"></span>
                                                            <span class="timeline-location">
                                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                                {{ $exp->location }}
                                                            </span>
                                                        @endif
                                                        <span class="timeline-separator"></span>
                                                        <span>{{ $exp->start_date->format('M Y') }} — {{ $exp->is_current ? __('Present') : $exp->end_date->format('M Y') }}</span>
                                                    </div>
                                                    @if($exp->trans('description'))
                                                        <p class="timeline-description">{{ $exp->trans('description') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                                <!-- Education Column -->
                                <div class="career-column" id="education">
                                    <h3 class="career-column-title">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c0 1.1 2.7 3 6 3s6-1.9 6-3v-5"></path></svg>
                                        {{ __('Education') }}
                                    </h3>
                                    <div class="timeline-compact">
                                        @foreach($education as $edu)
                                            <div class="timeline-item {{ $edu->is_current ? 'current' : '' }}">
                                                <div class="timeline-dot"></div>
                                                <div class="timeline-card">
                                                    <div class="timeline-header">
                                                        <h4 class="timeline-title">{{ $edu->trans('degree') }}</h4>
                                                        @if($edu->is_current)
                                                            <span class="timeline-badge current">● {{ __('Present') }}</span>
                                                        @else
                                                            <span class="timeline-badge past">{{ $edu->start_date->format('Y') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="timeline-meta">
                                                        <span class="timeline-institution">{{ $edu->institution }}</span>
                                                        @if($edu->location)
                                                            <span class="timeline-separator"></span>
                                                            <span class="timeline-location">
                                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                                {{ $edu->location }}
                                                            </span>
                                                        @endif
                                                        <span class="timeline-separator"></span>
                                                        <span>{{ $edu->start_date->format('M Y') }} — {{ $edu->is_current ? __('Present') : $edu->end_date->format('M Y') }}</span>
                                                    </div>
                                                    @if($edu->trans('field_of_study'))
                                                        <p class="timeline-degree">{{ $edu->trans('field_of_study') }}</p>
                                                    @endif
                                                    @if($edu->trans('description'))
                                                        <p class="timeline-description">{{ $edu->trans('description') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>
                    @elseif($section->type === 'projects')
                        <section class="section scroll-reveal section-glow" id="{{ $section->type }}">
                            <div class="projects-glow">
                                <div class="light-beam"></div>
                                <div class="light-accent-left"></div>
                                <div class="light-accent-right"></div>
                            </div>
                            <div class="projects-section-layout">
                                <div>
                                    <h2 class="projects-section-title">{{ $section->trans('title') }}</h2>
                                    @if($section->trans('subtitle'))
                                        <p class="section-subtitle" style="margin-top: 0.5rem;">{{ $section->trans('subtitle') }}</p>
                                    @endif
                                </div>
                                <div class="projects-grid">
                                    @foreach($projects as $index => $project)
                                        <div class="project-card">
                                            <span class="project-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                            @if($project->image)
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->trans('name') }}" class="project-icon">
                                            @else
                                                <div class="project-icon-placeholder">{{ substr($project->trans('name'), 0, 1) }}</div>
                                            @endif
                                            @if($project->technologies)
                                                <p class="project-technologies">{{ $project->technologies }}</p>
                                            @endif
                                            <div class="project-name">
                                                @if($project->url)
                                                    <a href="{{ $project->url }}" target="_blank" rel="noopener">{{ $project->trans('name') }}</a>
                                                    <svg class="project-link-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                                @elseif($project->github_url)
                                                    <a href="{{ $project->github_url }}" target="_blank" rel="noopener">{{ $project->trans('name') }}</a>
                                                    <svg class="project-link-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                                @else
                                                    {{ $project->trans('name') }}
                                                @endif
                                            </div>
                                            @if($project->trans('description'))
                                                <p class="project-description">{{ $project->trans('description') }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endif
                @endforeach
            @endif
            
            <!-- Contact Section -->
            <section class="contact-section scroll-reveal" id="contact">
                <div class="contact-wrapper">
                    <div class="contact-info">
                        <h2 class="contact-heading">{{ __('Get in Touch') }}</h2>
                        <p class="contact-text">{{ __('Have a question or want to collaborate? Feel free to send me a message.') }}</p>
                        
                        @if($personalInfo)
                            <div class="contact-details">
                                @if($personalInfo->email)
                                    <div class="contact-detail-item">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                        <a href="mailto:{{ $personalInfo->email }}">{{ $personalInfo->email }}</a>
                                    </div>
                                @endif
                                @if($personalInfo->phone)
                                    <div class="contact-detail-item">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                        <a href="tel:{{ $personalInfo->phone }}">{{ $personalInfo->phone }}</a>
                                    </div>
                                @endif
                                @if($personalInfo->location)
                                    <div class="contact-detail-item">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <span>{{ $personalInfo->location }}</span>
                                    </div>
                                @endif
                            </div>
                        @endif
                        
                    </div>
                    
                    <div class="contact-form-wrapper">
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="contact-form-row">
                                <div class="contact-form-group">
                                    <label class="contact-label">{{ __('Name') }} <span class="contact-required">*</span></label>
                                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="{{ __('Your Name') }}" class="contact-input">
                                    @error('name') <p class="contact-error">{{ $message }}</p> @enderror
                                </div>
                                <div class="contact-form-group">
                                    <label class="contact-label">{{ __('Email') }} <span class="contact-required">*</span></label>
                                    <input type="email" name="email" required value="{{ old('email') }}" placeholder="{{ __('Your Email') }}" class="contact-input">
                                    @error('email') <p class="contact-error">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            
                            <div class="contact-form-group">
                                <label class="contact-label">{{ __('Subject') }}</label>
                                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="{{ __('What is it about?') }}" class="contact-input">
                                @error('subject') <p class="contact-error">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="contact-form-group">
                                <label class="contact-label">{{ __('Message') }} <span class="contact-required">*</span></label>
                                <textarea name="message" required rows="4" placeholder="{{ __('Your message...') }}" class="contact-input contact-textarea">{{ old('message') }}</textarea>
                                @error('message') <p class="contact-error">{{ $message }}</p> @enderror
                            </div>
                            
                            <button type="submit" class="contact-submit">
                                {{ __('Send Message') }}
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        @if(session('contact_success'))
            <div class="toast" id="successToast">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <span>{{ session('contact_success') }}</span>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
        @endif

        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="copyright">
                    © {{ date('Y') }} {{ config('app.name', 'CV') }}. {{ __('All rights reserved.') }}
                </div>
                
                <div class="footer-links">
                    @foreach($sections as $navSection)
                        <a href="#{{ $navSection->type }}">{{ $navSection->trans('title') }}</a>
                    @endforeach
                </div>
            </div>
        </footer>

        <script>
            // Theme toggle
            const themeToggle = document.getElementById('theme-toggle');
            const sunIcon = document.getElementById('sun-icon');
            const moonIcon = document.getElementById('moon-icon');
            const html = document.documentElement;
            
            function updateThemeIcons() {
                const isDark = html.classList.contains('dark');
                sunIcon.style.display = isDark ? 'block' : 'none';
                moonIcon.style.display = isDark ? 'none' : 'block';
            }
            
            // Check for saved theme or system preference
            const savedTheme = localStorage.getItem('theme');
            const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme === 'dark' || (!savedTheme && systemDark)) {
                html.classList.add('dark');
            }
            updateThemeIcons();
            
            themeToggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
                updateThemeIcons();
            });
            
            // Mobile menu toggle
            const mobileToggle = document.getElementById('mobile-toggle');
            const nav = document.getElementById('nav');
            
            mobileToggle.addEventListener('click', () => {
                nav.classList.toggle('mobile-open');
            });
            
            // Close mobile menu when clicking a link
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', () => {
                    nav.classList.remove('mobile-open');
                });
            });
            
            // Active nav link on scroll
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[data-section]');
            
            function updateActiveLink() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - 100) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.dataset.section === current) {
                        link.classList.add('active');
                    }
                });
            }
            
            window.addEventListener('scroll', updateActiveLink);
            updateActiveLink();
            
            // Scroll reveal animation
            const scrollRevealElements = document.querySelectorAll('.scroll-reveal');
            
            const scrollRevealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        scrollRevealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            scrollRevealElements.forEach(el => scrollRevealObserver.observe(el));
            
        </script>
    </body>
</html>