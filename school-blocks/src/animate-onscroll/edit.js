import { __ } from '@wordpress/i18n';
import { 
    useBlockProps, 
    InnerBlocks, 
    InspectorControls 
} from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';

// destructure 'attributes' and 'setAttributes' from props
export default function Edit( { attributes, setAttributes } ) {
    const { animation } = attributes;

    return (
        <>
		            {/* create the Sidebar settings */}
            <InspectorControls>
                <PanelBody title={ __( 'Animation Settings', 'school-blocks' ) }>
                    <SelectControl
                        label={ __( 'Choose Animation', 'school-blocks' ) }
                        value={ animation }
                        options={ [
                            { label: __( 'Fade Up', 'school-blocks' ), value: 'fade-up' },
                            { label: __( 'Fade Down', 'school-blocks' ), value: 'fade-down' },
                            { label: __( 'Zoom In', 'school-blocks' ), value: 'zoom-in' },
                            { label: __( 'Flip Left', 'school-blocks' ), value: 'flip-left' },
                        ] }
                        onChange={ ( value ) => setAttributes( { animation: value } ) }
                    />
                </PanelBody>
            </InspectorControls>

            <div { ...useBlockProps() }>
            {/* what shows up in the main editor window */}
                <div className="animate-editor-info">
                    <strong>{ __( 'Animation: ', 'school-blocks' ) }</strong>
                    <code>{ animation }</code>
                </div>
                
                <div className="animate-editor-content">
					                    {/* allows dropping of other blocks inside! */}

                    <InnerBlocks />
                </div>
            </div>
        </>
    );
}