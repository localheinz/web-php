<?php

return [
    'common_header' => 'PHP 8.3 é uma atualização importante da linguagem PHP. Ela contém muitos recursos novos, como tipagem explícita de constantes de classe, clonagem profunda de propriedades somente leitura e adições à funcionalidade de aleatoriedade. Como sempre, também inclui melhorias de desempenho, correções de bugs e limpeza geral.',
    'documentation' => 'Doc',
    'main_title' => 'Lançado!',
    'main_subtitle' => 'PHP 8.3 é uma atualização importante da linguagem PHP.<br class="display-none-md">Ela contém muitos recursos novos, como tipagem explícita de constantes de classe, clonagem profunda de propriedades somente leitura e adições à funcionalidade de aleatoriedade. Como sempre, também inclui melhorias de desempenho, correções de bugs e limpeza geral.',
    'upgrade_now' => 'Atualize para PHP 8.3 agora!',

    'readonly_title' => 'Clonagem profunda de propriedades somente leitura',
    'readonly_description' => 'Propriedades <code>readonly</code> agora podem ser modificadas uma vez dentro do método mágico <code>__clone</code> para permitir a clonagem profunda de propriedades somente leitura.',
    'json_validate_title' => 'Nova função <code>json_validate()</code>',
    'json_validate_description' => '<code>json_validate()</code> permite verificar se uma string é sintaticamente válida em JSON, sendo mais eficiente do que <code>json_decode()</code>.',
    'typed_class_constants_title' => 'Constantes de classe tipadas',
    'override_title' => 'Novo atributo <code>#[\Override]</code>',
    'override_description' => 'Ao adicionar o atributo <code>#[\Override]</code> a um método, o PHP garantirá que um método com o mesmo nome exista em uma classe pai ou em uma interface implementada. Adicionar o atributo torna claro que a sobreposição de um método pai é intencional e simplifica a refatoração, pois a remoção de um método pai sobreposto será detectada.',
    'randomizer_getbytesfromstring_title' => 'Novo método <code>Randomizer<span style="word-break: break-all;">::</span>getBytesFromString()</code>',
    'randomizer_getbytesfromstring_description' => 'A <a href="/releases/8.2/pt_BR.php#random_extension">Extensão Random</a> que foi adicionada no PHP 8.2 foi ampliada com um novo método para gerar strings aleatórias consistindo apenas de bytes específicos. Este método permite que o desenvolvedor gere facilmente identificadores aleatórios, como nomes de domínio, e strings numéricas de comprimento arbitrário.',
    'randomizer_getfloat_nextfloat_title' => 'Novos métodos <code>Randomizer::getFloat()</code> e <code>Randomizer::nextFloat()</code>.',
    'randomizer_getfloat_nextfloat_description' => '<p>Devido à precisão limitada e ao arredondamento implícito de números de ponto flutuante, gerar um float imparcial dentro de um intervalo específico não é trivial, e as soluções comumente usadas no nível do usuário podem gerar resultados tendenciosos ou números fora do intervalo solicitado.</p><p>O Randomizer também foi ampliado com dois métodos para gerar floats de maneira imparcial. O método <code>Randomizer::getFloat()</code> utiliza o algoritmo da seção γ que foi publicado em <a href="https://doi.org/10.1145/3503512" target="_blank" rel="noopener noreferrer">Drawing Random Floating-Point Numbers from an Interval. Frédéric Goualard, ACM Trans. Model. Comput. Simul., 32:3, 2022.</a></p>',
    'dynamic_class_constant_fetch_title' => 'Recuperação dinâmica de constantes de classe',

    'new_classes_title' => 'Novas classes, interfaces e funções',
    'new_dom' => 'Novos métodos <a href="/manual/pt_BR/domelement.getattributenames.php"><code>DOMElement::getAttributeNames()</code></a>, <a href="/manual/pt_BR/domelement.insertadjacentelement.php"><code>DOMElement::insertAdjacentElement()</code></a>, <a href="/manual/pt_BR/domelement.insertadjacenttext.php"><code>DOMElement::insertAdjacentText()</code></a>, <a href="/manual/pt_BR/domelement.toggleattribute.php"><code>DOMElement::toggleAttribute()</code></a>, <a href="/manual/pt_BR/domnode.contains.php"><code>DOMNode::contains()</code></a>, <a href="/manual/pt_BR/domnode.getrootnode.php"><code>DOMNode::getRootNode()</code></a>, <a href="/manual/pt_BR/domnode.isequalnode.php"><code>DOMNode::isEqualNode()</code></a>, <code>DOMNameSpaceNode::contains()</code>, e <a href="/manual/pt_BR/domparentnode.replacechildren.php"><code>DOMParentNode::replaceChildren()</code></a>.',
    'new_intl' => 'Novos métodos <a href="/manual/pt_BR/intlcalendar.setdate.php"><code>IntlCalendar::setDate()</code></a>, <a href="/manual/pt_BR/intlcalendar.setdatetime.php"><code>IntlCalendar::setDateTime()</code></a>, <a href="/manual/pt_BR/intlgregoriancalendar.createfromdate.php"><code>IntlGregorianCalendar::createFromDate()</code></a>, e <a href="/manual/pt_BR/intlgregoriancalendar.createfromdatetime.php"><code>IntlGregorianCalendar::createFromDateTime()</code></a> methods.',
    'new_ldap' => 'Novas funções <code>ldap_connect_wallet()</code>, e <code>ldap_exop_sync()</code>.',
    'new_mb_str_pad' => 'Nova função <a href="/manual/pt_BR/function.mb-str-pad.php"><code>mb_str_pad()</code></a>.',
    'new_posix' => 'Novas funções <a href="/manual/pt_BR/function.posix-sysconf.php"><code>posix_sysconf()</code></a>, <a href="/manual/pt_BR/function.posix-pathconf.php"><code>posix_pathconf()</code></a>, <a href="/manual/pt_BR/function.posix-fpathconf.php"><code>posix_fpathconf()</code></a>, e <a href="/manual/pt_BR/function.posix-eaccess.php"><code>posix_eaccess()</code></a>.',
    'new_reflection' => 'Novo método <a href="/manual/pt_BR/reflectionmethod.createfrommethodname.php"><code>ReflectionMethod::createFromMethodName()</code></a>.',
    'new_socket' => 'Nova função <a href="/manual/pt_BR/function.socket-atmark.php"><code>socket_atmark()</code></a>.',
    'new_str' => 'Nova função <a href="/manual/pt_BR/function.str-increment.php"><code>str_increment()</code></a>, <a href="/manual/pt_BR/function.str-decrement.php"><code>str_decrement()</code></a>, e <a href="/manual/pt_BR/function.stream-context-set-options.php"><code>stream_context_set_options()</code></a>.',
    'new_ziparchive' => 'Novo método <a href="/manual/pt_BR/ziparchive.getarchiveflag.php"><code>ZipArchive::getArchiveFlag()</code></a>.',
    'new_openssl_ec' => 'Suporte para geração de chaves EC com parâmetros EC personalizados na extensão OpenSSL.',
    'new_ini' => 'Nova configuração INI <a href="/manual/pt_BR/migration83.other-changes.php#migration83.other-changes.ini"><code>zend.max_allowed_stack_size</code></a> para definir o tamanho máximo permitido da pilha.',

    'bc_title' => 'Alterações obsoletas e incompatibilidades com versões anteriores',
    'bc_datetime' => 'Exceções de Date/Time mais apropriadas.',
    'bc_arrays' => 'Atribuir um índice negativo <code>n</code> a um array vazio agora garantirá que o próximo índice seja <code>n + 1</code> em vez de <code>0</code>.',
    'bc_range' => 'Alterações na função <code>range()</code>.',
    'bc_traits' => 'Alterações na redeclaração de propriedades estáticas em traits.',
    'bc_umultipledecimalseparators' => 'A constante <code>U_MULTIPLE_DECIMAL_SEPERATORS</code> foi obsoleta em favor de <code>U_MULTIPLE_DECIMAL_SEPARATORS</code>.',
    'bc_mtrand' => 'A variante <a href="/manual/pt_BR/random.constants.php#constant.mt-rand-php"><code>MT_RAND_PHP</code></a> do Mt19937 está obsoleta.',
    'bc_reflection' => '<a href="/manual/pt_BR/reflectionclass.getstaticproperties.php"><code>ReflectionClass::getStaticProperties()</code></a> não é mais nulo.',
    'bc_ini' => 'As configurações INI <a href="/manual/pt_BR/info.configuration.php#ini.assert.active"><code>assert.active</code></a>, <a href="/manual/pt_BR/info.configuration.php#ini.assert.bail"><code>assert.bail</code></a>, <a href="/manual/pt_BR/info.configuration.php#ini.assert.callback"><code>assert.callback</code></a>, <a href="/manual/pt_BR/info.configuration.php#ini.assert.exception"><code>assert.exception</code></a> e <a href="/manual/pt_BR/info.configuration.php#ini.assert.warning"><code>assert.warning</code></a> foram obsoletas.',
    'bc_standard' => 'Chamar <a href="/manual/pt_BR/function.get-class.php"><code>get_class()</code></a> e <a href="/manual/pt_BR/function.get-parent-class.php"><code>get_parent_class()</code></a> sem argumentos está obsoleto.',

    'footer_title' => 'Melhorias de desempenho, sintaxe aprimorada, e maior segurança de tipos.',
    'footer_description' => '<p>Para downloads do código-fonte do PHP 8.3, visite a página de <a href="/downloads">downloads</a>. Binários para Windows podem ser encontrados no site <a href="https://windows.php.net/download">PHP for Windows</a>. A lista de alterações está registrada no <a href="/ChangeLog-8.php#PHP_8_3">ChangeLog</a>.</p>
        <p>O <a href="/manual/pt_BR/migration83.php">guia de migração</a> está disponível no Manual do PHP. Consulte-o para obter uma lista detalhada de novos recursos e alterações incompatíveis com versões anteriores.</p>',
];