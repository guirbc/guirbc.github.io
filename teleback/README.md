<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o Telessaúde

...

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Criando o Certificado

O certificado foi criado através [deste link](https://dev.to/vishalraj82/using-https-in-docker-for-local-development-nc7) e esta brevemente resumido abaixo.

o certificado será criado usando um utilitário chamado [mkcert](https://github.com/FiloSottile/mkcert).

Abra um terminal e rode - sudo apt install libnss3-tools -y. Agora vamos baixar um pre-built binário do mkcert binary da página do github.
Baixe o binário apropriado e mova o mesmo para /usr/local/bin. Também é necessário transformar o arquivo em executável usando o comando - chmod +x mkcert-v1.4.3-linux-amd64. 
Após, crie um link com o nome - mkcert - ln -s mkcert-v1.4.3-linux-amd64 mkcert. 
Exemplo:
 _mkcert -cert-file=certs/telebacklocal.inovadora.com.br.crt -key-file=certs/telebacklocal.inovadora.com.br.key telebacklocal.inovadora.com.br_


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
