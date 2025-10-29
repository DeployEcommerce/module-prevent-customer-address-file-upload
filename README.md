# module-prevent-customer-address-file-upload

This is a Magento 2 extension that prevents file uploads to 
`/customer/address_file/upload` endpoint which is used in combination with an 
flaw in Magento's logic to upload code and then execute it for CVE-2025-54236.

Although Adobe patched the part of the code that allows execution of the upload
they didn't make any changes to the behaviour that allows upload of files.

### Installation
```bash
composer require deployecommerce/module-prevent-customer-address-file-upload
bin/magento mo:e DeployEcommerce_PreventCustomerAddressFileUpload
```

### Further Reading
- https://sansec.io/research/sessionreaper
- https://slcyber.io/assetnote-security-research-center/why-nested-deserialization-is-still-harmful-magento-rce-cve-2025-54236/

### License
This module is licensed under the MIT License. See the [LICENSE](LICENSE.md) file for details.
