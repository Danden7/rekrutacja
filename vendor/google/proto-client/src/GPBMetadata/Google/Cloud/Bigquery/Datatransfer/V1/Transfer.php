<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/transfer.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1;

class Transfer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a880e0a34676f6f676c652f636c6f75642f62696771756572792f646174" .
            "617472616e736665722f76312f7472616e736665722e70726f746f122567" .
            "6f6f676c652e636c6f75642e62696771756572792e646174617472616e73" .
            "6665722e76311a1c676f6f676c652f70726f746f6275662f737472756374" .
            "2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374" .
            "616d702e70726f746f1a17676f6f676c652f7270632f7374617475732e70" .
            "726f746f22ad030a0e5472616e73666572436f6e666967120c0a046e616d" .
            "65180120012809121e0a1664657374696e6174696f6e5f64617461736574" .
            "5f696418022001280912140a0c646973706c61795f6e616d651803200128" .
            "0912160a0e646174615f736f757263655f696418052001280912270a0670" .
            "6172616d7318092001280b32172e676f6f676c652e70726f746f6275662e" .
            "53747275637412100a087363686564756c6518072001280912200a186461" .
            "74615f726566726573685f77696e646f775f64617973180c200128051210" .
            "0a0864697361626c6564180d20012808122f0a0b7570646174655f74696d" .
            "6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d7012310a0d6e6578745f72756e5f74696d6518082001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d7012430a05" .
            "7374617465180a2001280e32342e676f6f676c652e636c6f75642e626967" .
            "71756572792e646174617472616e736665722e76312e5472616e73666572" .
            "5374617465120f0a07757365725f6964180b2001280312160a0e64617461" .
            "7365745f726567696f6e180e2001280922d4030a0b5472616e7366657252" .
            "756e120c0a046e616d65180120012809121e0a1664657374696e6174696f" .
            "6e5f646174617365745f696418022001280912310a0d7363686564756c65" .
            "5f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d7012270a06706172616d7318092001280b32172e676f" .
            "6f676c652e70726f746f6275662e537472756374122c0a0872756e5f7469" .
            "6d65180a2001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d70122e0a0a73746172745f74696d6518042001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d70122c0a08656e" .
            "645f74696d6518052001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70122f0a0b7570646174655f74696d651806200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012" .
            "160a0e646174615f736f757263655f696418072001280912430a05737461" .
            "746518082001280e32342e676f6f676c652e636c6f75642e626967717565" .
            "72792e646174617472616e736665722e76312e5472616e73666572537461" .
            "7465120f0a07757365725f6964180b2001280312100a087363686564756c" .
            "65180c20012809228a020a0f5472616e736665724d65737361676512300a" .
            "0c6d6573736167655f74696d6518012001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012580a08736576657269747918" .
            "022001280e32462e676f6f676c652e636c6f75642e62696771756572792e" .
            "646174617472616e736665722e76312e5472616e736665724d6573736167" .
            "652e4d657373616765536576657269747912140a0c6d6573736167655f74" .
            "65787418032001280922550a0f4d65737361676553657665726974791220" .
            "0a1c4d4553534147455f53455645524954595f554e535045434946494544" .
            "100012080a04494e464f1001120b0a075741524e494e47100212090a0545" .
            "52524f5210032a470a0c5472616e7366657254797065121d0a195452414e" .
            "534645525f545950455f554e535045434946494544100012090a05424154" .
            "43481001120d0a0953545245414d494e4710022a81010a0d5472616e7366" .
            "65725374617465121e0a1a5452414e534645525f53544154455f554e5350" .
            "454349464945441000120c0a08494e4143544956451001120b0a0750454e" .
            "44494e471002120b0a0752554e4e494e471003120d0a0953554343454544" .
            "45441004120a0a064641494c45441005120d0a0943414e43454c4c454410" .
            "0642e7010a29636f6d2e676f6f676c652e636c6f75642e62696771756572" .
            "792e646174617472616e736665722e7631420d5472616e7366657250726f" .
            "746f50015a51676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f636c6f75642f62696771756572792f64" .
            "6174617472616e736665722f76313b646174617472616e73666572a20205" .
            "4743424454aa0225476f6f676c652e436c6f75642e42696751756572792e" .
            "446174615472616e736665722e5631ca0225476f6f676c655c436c6f7564" .
            "5c42696751756572795c446174615472616e736665725c5631620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

