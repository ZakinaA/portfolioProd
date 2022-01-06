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
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.1@163074496dc7c3c7b8ccbf3d4376c0187424ed81',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.1@c800380457948e65bbd30ba92cc17cda108bf8c9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.2@d6b3c37804539a24ba8a7d647a6144cab2f13242',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.2@1c2780df6b58998f411e64973cfa464ba0a06e00',
  'doctrine/orm' => '2.8.4@a588555ecd837b8d7e89355d9a13902e54d529c7',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.4@d962626a1b454edb36f727f8e0090b45280af98c',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.2.7@e6676acfabf011dca2beaa5f9b8d519c8aea2870',
  'symfony/cache' => 'v5.2.9@17a6d585603fade3838bc692548b619d97ded67e',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.2.8@8dfa5f8adea9cd5155920069224beb04f11d6b7e',
  'symfony/console' => 'v5.2.8@864568fdc0208b3eba3638b6000b69d2386e6768',
  'symfony/dependency-injection' => 'v5.2.9@2761ca2f7e2f41af3a45951e1ce8c01f121245eb',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.2.9@3d7a8138342ea146628a14372d1f1317503c6364',
  'symfony/dotenv' => 'v5.2.4@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.8@1416bc16317a8188aabde251afef7618bf4687ac',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => 'v5.2.7@c8bb14c3bcc397845d7e86a1cc5022671eed1ff8',
  'symfony/filesystem' => 'v5.2.7@056e92acc21d977c37e6ea8e97374b2a6c8551b0',
  'symfony/finder' => 'v5.2.9@ccccb9d48ca42757dd12f2ca4bf857a4e217d90d',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v5.2.9@a45ebbe5ef987a42dc4f9eab432b359bc13f0f4d',
  'symfony/framework-bundle' => 'v5.2.9@81720c6e7740a99dc70d5eb2123bcdf3d5d113f1',
  'symfony/google-mailer' => 'v5.2.4@e93f9d09b1cf02ce74d65c08c2ddda33a0b284ef',
  'symfony/http-client' => 'v5.2.9@653dc5e2201659abfa090a7396ce202371787540',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.8@e8fbbab7c4a71592985019477532629cb2e142dc',
  'symfony/http-kernel' => 'v5.2.9@eb540ef6870dbf33c92e372cfb869ebf9649e6cb',
  'symfony/intl' => 'v5.2.7@6d40be5e4331041aa14add5633986d95667ae624',
  'symfony/mailer' => 'v5.2.7@c50b304246e56c8574c203bce440f0eafb107ae9',
  'symfony/mime' => 'v5.2.9@64258e870f8cc75c3dae986201ea2df58c210b52',
  'symfony/monolog-bridge' => 'v5.2.7@ddb9c33dfa1bd89c956892c3d1ba35f324e3ccd8',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/notifier' => 'v5.2.8@bafefffe9e1ac78d2aaa40fdaf578ef33f41fe72',
  'symfony/options-resolver' => 'v5.2.4@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.2.7@98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
  'symfony/property-access' => 'v5.2.4@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.8@cc8121baf91039648d5f8feb894dc4a9d4935cc0',
  'symfony/proxy-manager-bridge' => 'v5.2.9@1c89e22a22e01f040849a28f7fe63c6a16e6c99f',
  'symfony/routing' => 'v5.2.9@4a7b2bf5e1221be1902b6853743a9bb317f6925e',
  'symfony/security-bundle' => 'v5.2.9@c3502279a8e28e6586c1f0cce674f0d360236997',
  'symfony/security-core' => 'v5.2.9@03d9f94e733afd4f3e73081fa7809f8a02f77a11',
  'symfony/security-csrf' => 'v5.2.7@0ed3353e3c053711a1d86a74395f25736fc333de',
  'symfony/security-guard' => 'v5.2.8@8137325674edfdecf7367e40804d8ee9525b87e0',
  'symfony/security-http' => 'v5.2.9@cc02ba30c8e721704202489f6e7963339a367e37',
  'symfony/sendgrid-mailer' => 'v5.2.4@f523791455b51545ccfe67398994af33e91e8a3a',
  'symfony/serializer' => 'v5.2.9@b072c8faa82c641da6cc32c33f8caa7c7c4567a2',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.2.7@d99310c33e833def36419c284f60e8027d359678',
  'symfony/string' => 'v5.2.8@01b35eb64cac8467c3f94cd0ce2d0d376bb7d1db',
  'symfony/translation' => 'v5.2.9@61af68dba333e2d376a325a29c2a3f2a605b4876',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.2.8@dcdc60ace03264f50258978113c4f2a33bdc439f',
  'symfony/twig-bundle' => 'v5.2.9@d5edd09653ba5a251e15e2a20510f6c795e6c759',
  'symfony/validator' => 'v5.2.9@3c16d6c2036190f9033643057168a6d8c5617886',
  'symfony/var-dumper' => 'v5.2.8@d693200a73fae179d27f8f1b16b4faf3e8569eba',
  'symfony/var-exporter' => 'v5.2.8@d26db2d2b2d7eb2c1adb8545179f8803998b8237',
  'symfony/web-link' => 'v5.2.5@118ef73c177a033955af1342ec54f08dd1bf6d8e',
  'symfony/yaml' => 'v5.2.9@d23115e4a3d50520abddccdbec9514baab1084c8',
  'symfonycasts/reset-password-bundle' => 'v1.8.0@a41cceff06039e586619b1505af05f77b22b41b5',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'symfony/browser-kit' => 'v5.2.9@38e16b426f1a4cd663b2583111f213e0c9d9d4fe',
  'symfony/css-selector' => 'v5.2.9@5d5f97809015102116208b976eb2edb44b689560',
  'symfony/debug-bundle' => 'v5.2.4@ec21bd26d24dab02ac40e4bec362b3f4032486e8',
  'symfony/dom-crawler' => 'v5.2.9@8d5201206ded6f37de475b041a11bfaf3ac73d5e',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/phpunit-bridge' => 'v5.2.9@ea24e42c1ee04792f5d814da6f0814b20ece2907',
  'symfony/web-profiler-bundle' => 'v5.2.8@68aea5b0ca1328c2a1ae3df04cce50302a5106f9',
  'symfony/polyfill-ctype' => '*@96d6905758d07ef13272e0cd5639e52c2d6f42b6',
  'symfony/polyfill-iconv' => '*@96d6905758d07ef13272e0cd5639e52c2d6f42b6',
  'symfony/polyfill-php72' => '*@96d6905758d07ef13272e0cd5639e52c2d6f42b6',
  '__root__' => 'dev-master@96d6905758d07ef13272e0cd5639e52c2d6f42b6',
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
