<?php if ( ! defined( 'ABSPATH' ) ) exit;

function pdgc_acf_blocks() {
	pdg_add_acf_block( 'Header', true, true);
	pdg_add_acf_block( 'Footer', true);
	pdg_add_acf_block( 'hpVideo', true, true);
	pdg_add_acf_block( 'hpText', true);
	pdg_add_acf_block( 'hpImage', true);
	pdg_add_acf_block( 'hpOption', true);
	pdg_add_acf_block( 'hpForm', true);
	pdg_add_acf_block( 'hpPartners', true);
	pdg_add_acf_block( 'ITitle', true);
	pdg_add_acf_block( 'IImage', true);
	pdg_add_acf_block( 'IQuote', true, true);
	pdg_add_acf_block( 'PSTitle', true);
	pdg_add_acf_block( 'PSOption', true);
	pdg_add_acf_block( 'PSImage', true);
	pdg_add_acf_block( 'PSForm', true);
	pdg_add_acf_block( 'UTitle', true);
	pdg_add_acf_block( 'UForm', true);
	pdg_add_acf_block( 'SBTitle', true);
	pdg_add_acf_block( 'SBVideo', true, true);
	pdg_add_acf_block( 'SBPurpose', true);
	pdg_add_acf_block( 'SBSmallTitle', true);
	pdg_add_acf_block( 'SBOrange', true);
	pdg_add_acf_block( 'SBDream', true);
	pdg_add_acf_block( 'SBOrange2', true);
	pdg_add_acf_block( 'SBOption', true);
	pdg_add_acf_block( 'SATitle', true);
	pdg_add_acf_block( 'SASearch', true, true);
	pdg_add_acf_block( 'ISTitle', true);
	pdg_add_acf_block( 'ISStory', true, true);
	pdg_add_acf_block( 'ISTeam', true);
}
add_action( 'acf/init', 'pdgc_acf_blocks' );
