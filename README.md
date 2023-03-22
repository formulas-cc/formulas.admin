# formulas.admin


方略有数（Formulas Youshu）企业统一融合站点管理后台。

原formulas.cc、formulas.cms项目的管理后台。

## 当前迭代

mvp v0.2.0版本


## 部署须知

部署至云端需要修改配置文件

### 1. application/config.php

- app_debug 'true' -> 'false'
- url_domain_root '' -> 'formulas.cc'

### 2. application/extra/upload.php

- cdnurl 'https://t440pfa.vip.cpolar.cn' -> 'https://www.formulas.cc'