const __vite__fileDeps=["./Settings-do863ioiri.js","../main-do863ioiri.js","./main-do863ioiri.css","./labelsList-do863ioiri.js","./MultiSelectMenu-do863ioiri.js","./Settings-do863ioiri.css","./NotFoundTable-do863ioiri.js","./BrowserIcon-do863ioiri.js","./TreeView-do863ioiri.js","./redirectsHeader-do863ioiri.js","./RedirectsTable-do863ioiri.js"],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
import{r as s,R as e,_ as r,t as l,H as u,J as c,K as i}from"../main-do863ioiri.js";import{O as d,u as m,M as p}from"./useModuleSectionRoute-do863ioiri.js";/* empty css                            */function b({moduleId:o}){const[n,a]=s.useState("about");return e.createElement(d,{moduleId:o,section:t=>a(t),noIntegrate:!0},n==="about"&&e.createElement("section",null,e.createElement("p",null,r("404 errors can dampen your website’s SEO performance and user engagement alike. For larger websites, even identifying broken pages can be a time-consuming and difficult task. Luckily, URLsLab’s Redirects module is here to help.","urlslab")),e.createElement("p",null,r("With this module’s advanced monitoring system, you can effortlessly identify and resolve 404 errors, helping to maintain your site’s integrity and keeping it broken-link-free. You can also set up permanent or temporary redirects, ensuring your visitors always land on the correct page. All of this can be done through a simple and easy-to-use interface.","urlslab")),e.createElement("p",null,r("The Redirects module also contributes to your website’s SEO efforts. By proactively rectifying 404 errors, your website is more likely to perform better, both in terms of user experience and SEO rankings.","urlslab"))),n==="faq"&&e.createElement("section",null,e.createElement("h4",null,r("How does the Redirects module identify 404 errors on my website?","urlslab")),e.createElement("p",null,r("URLsLab’s Redirects module uses an advanced monitoring system to identify 404 errors throughout your website. In the module’s dashboard, you are notified each time it finds a 404 error.","urlslab")),e.createElement("h4",null,r("Does the Redirects module allow me to customize its settings?","urlslab")),e.createElement("p",null,r("Yes, it does. With the Redirects module’s Settings tab, you can customize its functionalities according to your website’s needs.","urlslab"))))}const y=s.lazy(()=>i(()=>import("./Settings-do863ioiri.js"),__vite__mapDeps([0,1,2,3,4,5]),import.meta.url)),f=s.lazy(()=>i(()=>import("./NotFoundTable-do863ioiri.js"),__vite__mapDeps([6,1,2,7,8,9]),import.meta.url)),g=s.lazy(()=>i(()=>import("./RedirectsTable-do863ioiri.js"),__vite__mapDeps([10,1,2,9]),import.meta.url));function v(){const{__:o}=l(),{moduleId:n}=u(),a=new Map([["redirects",o("Redirects","urlslab")],["notfound",o("404 Monitor","urlslab")]]),t=m(["overview","settings",...c(a)]);return e.createElement("div",{className:"urlslab-tableView"},e.createElement(p,{moduleId:n,moduleMenu:a,activeSection:t}),t==="overview"&&e.createElement(b,{moduleId:n}),t==="redirects"&&e.createElement(s.Suspense,null,e.createElement(g,{slug:"redirects"})),t==="notfound"&&e.createElement(s.Suspense,null,e.createElement(f,{slug:"not-found-log"})),t==="settings"&&e.createElement(s.Suspense,null,e.createElement(y,{className:"fadeInto",settingId:n})))}export{v as default};
