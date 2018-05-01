# 
Functionality
[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-staff.svg?branch=master)](https://travis-ci.org/gordonbanderson/weboftalent-staff)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-staff/build-status/master)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-staff/coverage.svg?branch=master)](https://codecov.io/github/gordonbanderson/weboftalent-staff?branch=master)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/staff/version)](https://packagist.org/packages/weboftalent/staff)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/staff/v/unstable)](//packagist.org/packages/weboftalent/staff)
[![Total Downloads](https://poser.pugx.org/weboftalent/staff/downloads)](https://packagist.org/packages/weboftalent/staff)
[![License](https://poser.pugx.org/weboftalent/staff/license)](https://packagist.org/packages/weboftalent/staff)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/staff/d/monthly)](https://packagist.org/packages/weboftalent/staff)
[![Daily Downloads](https://poser.pugx.org/weboftalent/staff/d/daily)](https://packagist.org/packages/weboftalent/staff)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:staff/badge.svg)](https://www.versioneye.com/php/weboftalent:staff)
[![Reference Status](https://www.versioneye.com/php/weboftalent:staff/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:staff/references)

![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-staff/branch.svg?branch=master)
* Adds content types Staff and Staff Folder

# Installation
    git clone git://github.com/gordonbanderson/weboftalent-staff.git
    cd weboftalent-staff
    git checkout stable24

The name of the output directory does not matter

# Usage
* Add a content type of _StaffFolder_ say under 'About Us'
* Add individual pages of type _Staff_.  These contain space for information, a picture, and optional email / telephone contact details.
* The staff folder will render as one page, but can easily be changed to show individual staff members.  We've found that often people do not put in enough information to justify a separate page per person.

# Dependencies
* Portlets module http://weboftalent.asia/blog/portlets-module/
* Pagination module https://github.com/gordonbanderson/weboftalent-pagination

# Silverstripe Version Compatibility
2.4 only (tested with 2.4.5+) - stable24 branch

# Future Enhancements
* Add an organisation chart (these are popular on Thai websites)
