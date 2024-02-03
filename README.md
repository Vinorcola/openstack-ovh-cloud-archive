# Fork of PHP OpenStack SDK dedicated to OVH Cloud Archive

This package add the ability to extract some specific headers on stored objects. This is intended to use with OVH Cloud
Archive service.

This package is adding 2 attributes to the `StorageObject` class:

* `string|null $retrievalState` that contains the value of the `x-ovh-retrieval-state` header when applicable.
* `int|null $retrievalDelay` that contains the value of the `x-ovh-retrieval-delay` header when applicable.

Please refer to the original SDK for complete documentation: https://github.com/php-opencloud/openstack
Please refer to OVH documentation: https://help.ovhcloud.com/csm/en-ie-documentation-storage-object-storage-openstack-swift-archive-storage-class-specifics?id=kb_browse_cat&kb_id=38e74da5a884a950f07829d7d5c75217&kb_category=b0a0a144f06521142d4c573843a28193
