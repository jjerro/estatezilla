<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute ini perlu diterima.",
	"active_url"           => ":attribute bukan tautan URL yang sah.",
	"after"                => ":attribute harus merupakan tanggal setelah :date.",
	"alpha"                => ":attribute hanya boleh berisi huruf saja.",
	"alpha_dash"           => ":attribute hanya boleh berisi huruf, angka dan dahses(_).",
	"alpha_num"            => ":attribute hanya boleh berisi huruf dan angka saja.",
	"array"                => ":attribute harus merupakan array.",
	"before"               => ":attribute harus merupakan tanggal sebelum :date.",
	"between"              => [
		"numeric" => ":attribute haruslah diantara :min dan :max.",
		"file"    => ":attribute haruslah diatara :min dan :max KB.",
		"string"  => ":attribute harus berjumlah diantara :min dan :max karakter.",
		"array"   => ":attribute harus berjumlah diatara :min and :max item.",
	],
	"boolean"              => "Kolom :attribute hanya boleh true atau false.",
	"confirmed"            => "Konfirmasi :attribute tidak cocok.",
	"date"                 => ":attribute bukan format tanggal yang valid.",
	"date_format"          => ":attribute tidak cocok dengan format :format.",
	"different"            => ":attribute dan :other harus berbeda.",
	"digits"               => ":attribute harus :digits digit.",
	"digits_between"       => ":attribute hanya boleh diantara :min dan :max digit.",
	"email"                => ":attribute harus alamat email yang valid.",
	"filled"               => "Kolom :attribute wajib diisi.",
	"exists"               => "Atribut :attribute yang dipilih tidak valid.",
	"image"                => ":attribute harus merupakan gambar.",
	"in"                   => "Atribut :attribute yang dipilih tidak valid.",
	"integer"              => ":attribute haarus merupakan integer.",
	"ip"                   => ":attribute harus merupakan alamat IP yang valid.",
	"max"                  => [
		"numeric" => ":attribute tidak boleh lebih besar dari :max.",
		"file"    => ":attribute tidak boleh lebih besar dari :max KB.",
		"string"  => ":attribute tidak boleh lebih dari :max karakter.",
		"array"   => ":attribute tidak boleh melebihi :max item.",
	],
	"mimes"                => "Jenis file :attribute harus merupakan tipe: :values.",
	"min"                  => [
		"numeric" => ":attribute setidaknya harus :min.",
		"file"    => ":attribute setidaknya harus :min KB.",
		"string"  => ":attribute setidaknya harus :min karakter.",
		"array"   => ":attribute harus memiliki setidaknya :min item.",
	],
	"not_in"               => "Atribut :attribute yang dipilih tidak valid.",
	"numeric"              => ":attribute harus merupakan angka.",
	"regex"                => "Format :attribute tidak valid.",
	"required"             => "Kolom :attribute wajib diisi.",
	"required_if"          => "Kolom :attribute wajib diisi jika :other adalah :value.",
	"required_with"        => "Kolom :attribute wajib diisi jika terdapat :values.",
	"required_with_all"    => "Kolom :attribute wajib diisi jika terdapat :values.",
	"required_without"     => "Kolom :attribute wajib diisi jika tidak terdapat :values.",
	"required_without_all" => "Kolom :attribute wajib diisi jika tidak ada :values sama sekali.",
	"same"                 => "Atribut :attribute dan :other harus sesuai.",
	"size"                 => [
		"numeric" => ":attribute harus berukuran :size.",
		"file"    => ":attribute harus berukuran :size KB.",
		"string"  => ":attribute harus berukuran :size karakter.",
		"array"   => ":attribute harus berisi :size item.",
	],
	"unique"               => ":attribute telah digunakan.",
	"url"                  => "Format :attribute tidak valid.",
	"timezone"             => ":attribute wajib menggunakan zona yang sah.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
