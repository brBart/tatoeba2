<?php
/* Sinogram Fixture generated on: 2015-02-24 10:49:31 : 1424774971 */
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class SinogramsFixture extends TestFixture {
	public $name = 'Sinogram';

	public $fields = array(
		'id' => ['type' => 'integer', 'null' => false, 'default' => null],
		'utf' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'comment' => 'code utf8 du caractere', 'charset' => 'utf8'],
		'glyph' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'comment' => 'caractère en lui même', 'charset' => 'utf8'],
		'strokes' => ['type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'comment' => 'nombre de trait composant le caractère'],
		'english' => ['type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'traduction du caractère', 'charset' => 'utf8'],
		'chin-trad' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'comment' => 'équivalent traditionelle du caractère', 'charset' => 'utf8'],
		'chin-simpl' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'comment' => 'équivalent simplifié du caractère', 'charset' => 'utf8'],
		'chin-pinyin' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'pinyin (chinois) du caractère', 'charset' => 'latin1'],
		'jap-on' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'prononciation On du caractère', 'charset' => 'latin1'],
		'jap-kun' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'prononciation Kun du caractère', 'charset' => 'latin1'],
		'frequency' => ['type' => 'float', 'null' => false, 'default' => '0', 'comment' => 'frequence du caractère'],
		'checked' => ['type' => 'boolean', 'null' => false, 'default' => null],
		'subcharacterslist' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'usedByList' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'_indexes' => ['glyph_index' => ['unique' => 0, 'columns' => 'glyph']],
		'_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
		'_options' => ['charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB']
	);

	public $records = array(
		array(
			'id' => '20008',
			'utf' => '4E28',
			'glyph' => '丨',
			'strokes' => '1',
			'english' => '[same as U+3021 HANGZHOU NUMERAL ONE 〡] number one; line; KangXi radical 2',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'GUN3',
			'jap-on' => 'KON SHI JO NYO',
			'jap-kun' => 'SUSUMU SHIRIZOKU',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '20013',
			'utf' => '4E2D',
			'glyph' => '中',
			'strokes' => '4',
			'english' => 'central; center, middle; in the midst of; hit [target]; attain',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'ZHONG1 ZHONG4',
			'jap-on' => 'CHUU',
			'jap-kun' => 'NAKA UCHI ATARU',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '21313',
			'utf' => '5341',
			'glyph' => '十',
			'strokes' => '2',
			'english' => 'ten, tenth; complete; perfect',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'SHI2',
			'jap-on' => 'JUU JITSU',
			'jap-kun' => 'TOU TOTABI',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '21430',
			'utf' => '53B6',
			'glyph' => '厶',
			'strokes' => '2',
			'english' => 'private, secret; KangXi radical 28',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'SI1 MOU3',
			'jap-on' => 'SHI BOU MU',
			'jap-kun' => 'GOZARU',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '21475',
			'utf' => '53E3',
			'glyph' => '口',
			'strokes' => '3',
			'english' => 'mouth; open end; entrance, gate',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'KOU3',
			'jap-on' => 'KOU KU',
			'jap-kun' => 'KUCHI',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '21476',
			'utf' => '53E4',
			'glyph' => '古',
			'strokes' => '5',
			'english' => 'old, classic, ancient',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'GU3',
			'jap-on' => 'KO',
			'jap-kun' => 'FURUI INISHIE',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '26376',
			'utf' => '6708',
			'glyph' => '月',
			'strokes' => '4',
			'english' => 'moon; month; KangXi radical 74',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'YUE4',
			'jap-on' => 'GETSU GATSU',
			'jap-kun' => 'TSUKI',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '26391',
			'utf' => '6717',
			'glyph' => '朗',
			'strokes' => '11',
			'english' => 'clear, bright; distinct',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'LANG3',
			'jap-on' => 'ROU',
			'jap-kun' => 'HOGARAKA AKIRAKA',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '63785',
			'utf' => 'F929',
			'glyph' => '朗',
			'strokes' => '10',
			'english' => 'clear, bright; distinct',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => NULL,
			'jap-on' => NULL,
			'jap-kun' => NULL,
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '32993',
			'utf' => '80E1',
			'glyph' => '胡',
			'strokes' => '9',
			'english' => 'recklessly, foolishly; wildly',
			'chin-trad' => 'U+885A U+9',
			'chin-simpl' => NULL,
			'chin-pinyin' => 'HU2',
			'jap-on' => 'KO GO',
			'jap-kun' => 'NANZO EBISU',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '33400',
			'utf' => '8278',
			'glyph' => '艸',
			'strokes' => '6',
			'english' => 'grass; KangXi radical 140',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'CAO3 ZAO4',
			'jap-on' => 'SOU',
			'jap-kun' => 'KUSA',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '33401',
			'utf' => '8279',
			'glyph' => '艹',
			'strokes' => '3',
			'english' => 'grass; radical number 140',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => NULL,
			'jap-on' => NULL,
			'jap-kun' => NULL,
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '34018',
			'utf' => '84E2',
			'glyph' => '蓢',
			'strokes' => '16',
			'english' => '[Cant.] brake, fern',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'LANG2',
			'jap-on' => NULL,
			'jap-kun' => NULL,
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '34411',
			'utf' => '866B',
			'glyph' => '虫',
			'strokes' => '6',
			'english' => 'insects, worms; KangXi radical 142',
			'chin-trad' => 'U+87F2',
			'chin-simpl' => NULL,
			'chin-pinyin' => 'CHONG2 HUI3',
			'jap-on' => 'CHUU KI',
			'jap-kun' => 'MUSHI',
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
		array(
			'id' => '34676',
			'utf' => '8774',
			'glyph' => '蝴',
			'strokes' => '15',
			'english' => 'butterfly',
			'chin-trad' => NULL,
			'chin-simpl' => NULL,
			'chin-pinyin' => 'HU2',
			'jap-on' => 'KO',
			'jap-kun' => NULL,
			'frequency' => '0',
			'checked' => 0,
			'subcharacterslist' => NULL,
			'usedByList' => NULL
		),
	);
}