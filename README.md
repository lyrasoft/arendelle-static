# Arendelle 切版範例

![Image](https://github.com/user-attachments/assets/4bc74542-405d-427e-b2fd-42d72cd08566)

<!-- TOC -->
* [Arendelle 切版範例](#arendelle-切版範例)
  * [安裝](#安裝)
  * [頁面入口](#頁面入口)
    * [模版與元件檔案](#模版與元件檔案)
  * [CSS / JS / Images](#css--js--images)
  * [CSS 結構](#css-結構)
    * [變數與 Bootstrap](#變數與-bootstrap)
  * [JS](#js)
  * [圖片](#圖片)
  * [安裝 NPM 套件](#安裝-npm-套件)
  * [Design System](#design-system)
<!-- TOC -->

> [!warning]
> ## 警告
> 請勿使用這個模版作為切版的基本模版，請使用 https://github.com/lyrasoft/outsource-layout-template

## 安裝

```shell
git clone {Project URL}
```

下載後，直接用 `localhost/{project}` 打開就能看到畫面。

若要修改編譯，可以執行：

```shell
cd {project}/.vaseman
composer install
yarn install
yarn dev
```

輸出全靜態檔案：

```shell
vaseman up .. --hard
```

## 頁面入口

所有頁面入口，請見 `.vaseman/entries`

### 模版與元件檔案

可以被重複使用的檔案，請見 `.vaseman/layouts`

## CSS / JS / Images

注意，所有的 CSS / JS / Images 統一放置在 `.vaseman/resources/` 內管理，放到別的地方去可能會被編譯器清除掉

## CSS 結構

CSS 結構，請見 `.vaseman/resources/assets/scss`

這是我們交件的必要 SCSS 結構，如果用其他工具做切版，請務必將 SCSS 改用此結構

### 變數與 Bootstrap

入口檔案是 `main.scss`，變數檔案是 `_variables.scss`，Bootstrap 會載入在 `main.scss` 內一起編譯。

## JS

JS 請放置 `.vaseman/resources/assets/js`，根據必要的頁面做切分，放在 `pages` 或其他相關目錄下。

## 圖片

圖片請放置 `.vaseman/resources/images` 下面，編譯時會被自動複製過去使用。

## 安裝 NPM 套件

若要安裝 NPM 套件，例如 `swiper`，請編輯 `.vaseman/fusionfiie.mjs`，在最下面的 `installVendors()` 加上套件名稱：

```js
export async function install() {
  return installVendors(
    [
      '@fortawesome/fontawesome-free',
      'bootstrap',
      'jquery',
      'swiper', // <-- 加在這裡
    ]
  );
}
```

然後再執行 `yarn add swiper` 就會自動把套件抓到 `assets/vendor` 內，可以直接引入。

## Design System

Design System 統一放在主選單第一個連結（若空間夠的話）

![Image](https://github.com/user-attachments/assets/a28b93f9-5ee2-4b09-a15a-852ea269176e)
