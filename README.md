# Sentry Skeleton

![Sentry Skeleton activity](https://heatbadger.now.sh/github/readme/contributte/sentry-skeleton/)

<p align=center>
  <a href="https://github.com/contributte/sentry-skeleton/actions"><img alt="Build status" src="https://badgen.net/github/checks/contributte/sentry-skeleton/master"></a>
  <a href="https://coveralls.io/r/contributte/sentry-skeleton"><img alt="Code coverage" src="https://badgen.net/coveralls/c/github/contributte/sentry-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/sentry-skeleton"><img alt="Packagist downloads" src="https://badgen.net/packagist/dm/contributte/sentry-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/sentry-skeleton"><img alt="Packagist version" src="https://badgen.net/packagist/v/contributte/sentry-skeleton"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/sentry-skeleton"><img alt="Supported PHP version" src="https://badgen.net/packagist/php/contributte/sentry-skeleton"></a>
  <a href="https://github.com/contributte/sentry-skeleton"><img alt="License" src="https://badgen.net/github/license/contributte/sentry-skeleton"></a>
  <a href="https://bit.ly/ctteg"><img alt="Gitter support" src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img alt="Forum support" src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img alt="Sponsor Contributte" src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

<p align=center>
	<img alt="Sentry Skeleton demo" src="https://api.microlink.io?url=https%3A%2F%2Fexamples.contributte.org%2Fsentry-skeleton%2F&overlay.browser=light&screenshot=true&meta=false&embed=screenshot.url"></img>
</p>

-----

## Goal

Main goal is to provide example of first class integration of [Sentry](https://github.com/contributte/sentry) to [Nette](https://nette.org).

## Demo

https://examples.contributte.org/sentry-skeleton/

## Safe local quick start

You will need `PHP 8.4+` and [Composer](https://getcomposer.org/).

Create project using composer.

```bash
composer create-project -s dev contributte/sentry-skeleton acme
cd acme
make init
make setup
```

Composer installs the dependencies. `make init` creates the ignored `config/local.neon`, and `make setup` prepares writable runtime directories.

Before starting, keep Sentry disabled locally so opening the example route cannot send an outbound event:

```neon
sentry:
	enable: false
```

```bash
make dev
```

Then visit [http://localhost:8000](http://localhost:8000). The local page exposes example error actions, but with Sentry disabled they do not report to Sentry. The skeleton does not include a Docker Compose definition.

## Configuration

`config/config.neon` enables Sentry in production mode, while the generated local override enables it explicitly. Outbound reporting is therefore opt-in for this safe local flow: add a DSN for a dedicated development/test Sentry project and set `enable: true` only when you intend to send test events. Never put a production DSN in local configuration or commit any real DSN.

## Commands

```bash
make qa       # coding standard and static analysis
make tests    # run Tester tests
make csf      # fix coding style
make clean    # remove temporary files and logs
```

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img alt="Milan Šulc" width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
