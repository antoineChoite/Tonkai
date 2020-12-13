<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.24@ca90a3291eee1538cd48ff25163240695bd95448',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v4.4.16@627761b47f94affdd8405e65245a8e1bbb810399',
  'symfony/cache' => 'v4.4.16@7ab1528cac0328566895ad303e2a5111aef2b440',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.16@e85481cf359a7b28a44ac91f7d83441b70d76192',
  'symfony/console' => 'v4.4.16@20f73dd143a5815d475e0838ff867bce1eebd9d5',
  'symfony/debug' => 'v4.4.16@c87adf3fc1cd0bf4758316a3a150d50a8f957ef4',
  'symfony/dependency-injection' => 'v4.4.16@4c41ad68924fd8f9e55e1cd77fd6bc28daa3fe89',
  'symfony/doctrine-bridge' => 'v4.4.16@12ce8950c685afb954026c2d0c975dfed3fc32f3',
  'symfony/dotenv' => 'v4.4.16@450e2dad0b42431ad9558bc8adf07e8c4b55d1cd',
  'symfony/error-handler' => 'v4.4.16@363cca01cabf98e4f1c447b14d0a68617f003613',
  'symfony/event-dispatcher' => 'v4.4.16@4204f13d2d0b7ad09454f221bb2195fccdf1fe98',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.16@b0b1ef4d86a968843748efd44c95abc0dd974de4',
  'symfony/filesystem' => 'v4.4.16@e74b873395b7213d44d1397bd4a605cd1632a68a',
  'symfony/finder' => 'v4.4.16@26f63b8d4e92f2eecd90f6791a563ebb001abe31',
  'symfony/flex' => 'v1.10.0@e38520236bdc911c2f219634b485bc328746e980',
  'symfony/form' => 'v4.4.16@27e5cfd473da30232cad45e1b0a7874458a3625d',
  'symfony/framework-bundle' => 'v4.4.16@0067e02d6ca55e284617777ed90cd086d3836457',
  'symfony/http-client' => 'v4.4.16@3ead7e297f4cc8a84661ef1f411c029acb34bc11',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.16@827a00811ef699e809a201ceafac0b2b246bf38a',
  'symfony/http-kernel' => 'v4.4.16@109b2a46e470a487ec8b0ffea4b0bb993aaf42ed',
  'symfony/inflector' => 'v4.4.16@a2ca868d7fc02800db67d1e1b6e5c83882d2aaa6',
  'symfony/intl' => 'v4.4.16@08aa334e1380eeef5450a11d40224d6bfa03efc3',
  'symfony/mailer' => 'v4.4.16@6429415051bbabfdfef8cad04abe97d7f974f8a6',
  'symfony/mime' => 'v4.4.16@360f9963b6d4db6c3454d58548fb2b085f97d3e2',
  'symfony/monolog-bridge' => 'v4.4.16@a4f03546300a269c8512476ce9865a2ec94a5675',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.4.16@157a252222251310fe50c71012b4e72f01325850',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/process' => 'v4.4.16@2f4b049fb80ca5e9874615a2a85dc2a502090f05',
  'symfony/property-access' => 'v4.4.16@3d97341e820c248f8dc0b6b5bf991964bda5a3ac',
  'symfony/property-info' => 'v4.4.16@f2063afce47039653b4c6754d35aeb647f837926',
  'symfony/routing' => 'v4.4.16@826794f2e9305fe73cba859c60d2a336851bd202',
  'symfony/security-bundle' => 'v4.4.16@fedaba9b8c1be0555831f009ec54f5e3ed34d8aa',
  'symfony/security-core' => 'v4.4.16@fa1310e3fb2768f7f4cb6d3385faa24259a20604',
  'symfony/security-csrf' => 'v4.4.16@3ca1576bc8d92cb0a8c990954704d2789a72cb57',
  'symfony/security-guard' => 'v4.4.16@872a648d28fc06bc34ba7b1e4236065e03aae5b7',
  'symfony/security-http' => 'v4.4.16@8a3077e266fb8bf7cc5567a67749b8937ca4d90a',
  'symfony/serializer' => 'v4.4.16@2af7e86db04ee65fdf1991b17ee0b3e955c93de9',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.16@7c1d1461330e86e901dbb587a10397d15a02cbad',
  'symfony/translation' => 'v4.4.16@73095716af79f610f3b6338b911357393fdd10ab',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.16@841c46c963891122429cfa1b56f06aeef9c1c010',
  'symfony/twig-bundle' => 'v4.4.16@9acacb72d30ee1ea0331762906a129a66a9d9883',
  'symfony/validator' => 'v4.4.17@aa3519160f5b09043888f92aae4fd78cc41a85bf',
  'symfony/var-dumper' => 'v4.4.16@3718e18b68d955348ad860e505991802c09f5f73',
  'symfony/var-exporter' => 'v4.4.16@a07f9c350ebe30dadd30505d2b05d7c9bbcef2b1',
  'symfony/web-link' => 'v4.4.16@4965045a9a0052537bef698be0e5859de27f4d32',
  'symfony/web-server-bundle' => 'v4.4.0@83202a9dae60b29eb55ae1a0c6696c586de3ce0b',
  'symfony/yaml' => 'v4.4.16@543cb4dbd45ed803f08a9a65f27fb149b5dd20c2',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/browser-kit' => 'v4.4.16@99b640fd5d06877e3242ba0393b40a7877dfe534',
  'symfony/css-selector' => 'v4.4.16@719506cffda9dba80c75d94ac50f1a2561520e4f',
  'symfony/debug-bundle' => 'v4.4.16@d11df24e90f07b49b1b1b170b28d8396edff4d8d',
  'symfony/dom-crawler' => 'v4.4.16@30ad9ac96a01913195bf0328d48e29d54fa53e6e',
  'symfony/maker-bundle' => 'v1.23.0@ffaee624a20a462ec2da82942d3c9d8fc8dd1421',
  'symfony/phpunit-bridge' => 'v5.1.8@61744927348cd391ac12f7c6b70544991275845c',
  'symfony/web-profiler-bundle' => 'v4.4.16@951540a04bd7ba2bb6b052c573a1450cd7eb2ea8',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}