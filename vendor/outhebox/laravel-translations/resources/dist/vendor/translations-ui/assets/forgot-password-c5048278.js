import{_ as h}from"./layout-guest-39563dad.js";import{d as v,T as x,o as l,c as m,w as s,a as o,b as t,t as V,e as k,f as n,u as a,g as B,Z as $,i as E}from"./app-9fe11bca.js";import{_ as N}from"./base-button.vue_vue_type_script_setup_true_lang-b1b2d84f.js";import{_ as C,a as I}from"./input-label.vue_vue_type_script_setup_true_lang-0dde02c4.js";import{_ as L}from"./input-text.vue_vue_type_script_setup_true_lang-56257151.js";import{_ as S}from"./alert.vue_vue_type_script_setup_true_lang-cbdab605.js";import"./logo-1a4eae55.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./icon-close-edc70b42.js";import"./use-input-size-3a8d5d38.js";import"./ExclamationCircleIcon-d8b3ccd6.js";import"./XCircleIcon-c66444f8.js";const T={class:"space-y-1"},G={class:"mt-8 flex w-full justify-center"},O=v({__name:"forgot-password",props:{status:{}},setup(R){const e=x({email:""}),u=()=>{e.post(route("ltu.password.email"),{onFinish:()=>{e.reset()}})};return(r,i)=>{const c=$,p=S,_=C,d=L,f=I,y=N,g=E,w=h;return l(),m(w,null,{title:s(()=>[o(" Reset your password ")]),subtitle:s(()=>[o(" Enter your email address below, and we'll send you instructions on how to reset your password. ")]),default:s(()=>[t(c,{title:"Reset your password"}),r.status?(l(),m(p,{key:0,variant:"success",class:"mb-4 w-full"},{default:s(()=>[o(V(r.status),1)]),_:1})):k("",!0),n("form",{class:"space-y-6",onSubmit:B(u,["prevent"])},[n("div",T,[t(_,{for:"email",value:"Email",class:"sr-only"}),t(d,{id:"email",modelValue:a(e).email,"onUpdate:modelValue":i[0]||(i[0]=b=>a(e).email=b),error:a(e).errors.email,type:"email",required:"",autofocus:"",autocomplete:"username",placeholder:"Email address",class:"bg-gray-50"},null,8,["modelValue","error"]),t(f,{message:a(e).errors.email},null,8,["message"])]),t(y,{type:"submit",variant:"secondary","is-loading":a(e).processing,"full-width":""},{default:s(()=>[o(" Send reset instructions ")]),_:1},8,["is-loading"])],32),n("div",G,[t(g,{href:r.route("ltu.login"),class:"text-xs font-medium text-gray-500 hover:text-blue-500"},{default:s(()=>[o(" Go back to sign in ")]),_:1},8,["href"])])]),_:1})}}});export{O as default};
