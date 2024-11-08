<?php declare(strict_types = 1);
namespace MailPoet\EmailEditor\Integrations\Core\Renderer\Blocks;
if (!defined('ABSPATH')) exit;
use MailPoet\EmailEditor\Engine\EmailEditor;
use MailPoet\EmailEditor\Engine\SettingsController;
class ParagraphTest extends \MailPoetTest {
 private $paragraphRenderer;
 private $parsedParagraph = [
 'blockName' => 'core/paragraph',
 'attrs' => [
 'style' => [
 'typography' => [
 'fontSize' => '16px',
 ],
 ],
 ],
 'innerBlocks' => [],
 'innerHTML' => '<p>Lorem Ipsum</p>',
 'innerContent' => [
 0 => '<p>Lorem Ipsum</p>',
 ],
 ];
 private $settingsController;
 public function _before() {
 $this->diContainer->get(EmailEditor::class)->initialize();
 $this->paragraphRenderer = new Text();
 $this->settingsController = $this->diContainer->get(SettingsController::class);
 }
 public function testItRendersContent(): void {
 $rendered = $this->paragraphRenderer->render('<p>Lorem Ipsum</p>', $this->parsedParagraph, $this->settingsController);
 $this->assertStringContainsString('width:100%', $rendered);
 $this->assertStringContainsString('Lorem Ipsum', $rendered);
 $this->assertStringContainsString('font-size:16px;', $rendered);
 $this->assertStringContainsString('text-align:left;', $rendered); // Check the default text-align
 $this->assertStringContainsString('align="left"', $rendered); // Check the default align
 }
 public function testItRendersContentWithPadding(): void {
 $parsedParagraph = $this->parsedParagraph;
 $parsedParagraph['attrs']['style']['spacing']['padding']['top'] = '10px';
 $parsedParagraph['attrs']['style']['spacing']['padding']['right'] = '20px';
 $parsedParagraph['attrs']['style']['spacing']['padding']['bottom'] = '30px';
 $parsedParagraph['attrs']['style']['spacing']['padding']['left'] = '40px';
 $parsedParagraph['attrs']['align'] = 'center';
 $rendered = $this->paragraphRenderer->render('<p>Lorem Ipsum</p>', $parsedParagraph, $this->settingsController);
 $this->assertStringContainsString('padding-top:10px;', $rendered);
 $this->assertStringContainsString('padding-right:20px;', $rendered);
 $this->assertStringContainsString('padding-bottom:30px;', $rendered);
 $this->assertStringContainsString('padding-left:40px;', $rendered);
 $this->assertStringContainsString('text-align:center;', $rendered);
 $this->assertStringContainsString('align="center"', $rendered);
 $this->assertStringContainsString('Lorem Ipsum', $rendered);
 }
 public function testItRendersBorders(): void {
 $parsedParagraph = $this->parsedParagraph;
 $parsedParagraph['attrs']['style']['border']['width'] = '10px';
 $parsedParagraph['attrs']['style']['border']['color'] = '#000001';
 $parsedParagraph['attrs']['style']['border']['radius'] = '20px';
 $content = '<p class="has-border-color test-class has-red-border-color">Lorem Ipsum</p>';
 $parsedParagraph['innerHTML'] = $content;
 $parsedParagraph['innerContent'] = [$content];
 $rendered = $this->paragraphRenderer->render($content, $parsedParagraph, $this->settingsController);
 $html = new \WP_HTML_Tag_Processor($rendered);
 $html->next_tag(['tag_name' => 'table']);
 $tableStyle = $html->get_attribute('style');
 // Table needs to have border-collapse: separate to make border-radius work
 $this->assertStringContainsString('border-collapse: separate', $tableStyle);
 $html->next_tag(['tag_name' => 'td']);
 $tableCellStyle = $html->get_attribute('style');
 // Border styles are applied to the table cell
 $this->assertStringContainsString('border-color:#000001', $tableCellStyle);
 $this->assertStringContainsString('border-radius:20px', $tableCellStyle);
 $this->assertStringContainsString('border-width:10px', $tableCellStyle);
 $tableCellClasses = $html->get_attribute('class');
 $this->assertStringContainsString('has-border-color test-class has-red-border-color', $tableCellClasses);
 $html->next_tag(['tag_name' => 'p']);
 // There are no border styles on the paragraph
 $paragraphStyle = $html->get_attribute('style');
 $this->assertStringNotContainsString('border', $paragraphStyle);
 }
 public function testItConvertsBlockTypography(): void {
 $parsedParagraph = $this->parsedParagraph;
 $parsedParagraph['attrs']['style']['typography'] = [
 'textTransform' => 'uppercase',
 'letterSpacing' => '1px',
 'textDecoration' => 'underline',
 'fontStyle' => 'italic',
 'fontWeight' => 'bold',
 'fontSize' => '20px',
 ];
 $rendered = $this->paragraphRenderer->render('<p>Lorem Ipsum</p>', $parsedParagraph, $this->settingsController);
 $this->assertStringContainsString('text-transform:uppercase;', $rendered);
 $this->assertStringContainsString('letter-spacing:1px;', $rendered);
 $this->assertStringContainsString('text-decoration:underline;', $rendered);
 $this->assertStringContainsString('font-style:italic;', $rendered);
 $this->assertStringContainsString('font-weight:bold;', $rendered);
 $this->assertStringContainsString('font-size:20px;', $rendered);
 $this->assertStringContainsString('Lorem Ipsum', $rendered);
 }
}
